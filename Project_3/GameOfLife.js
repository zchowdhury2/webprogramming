var mainSize = document.getElementById('size').value;

    function myFunction(size) {
        if(true){
            mainSize = size;
            //Removes the button, textbox, and text once game is started.
            var element = document.getElementById("btn");
            element.parentNode.removeChild(element);
            var element2 = document.getElementById("size");
            element2.parentNode.removeChild(element2);
            var element3 = document.getElementById("error");
            element3.parentNode.removeChild(element3);
            var element4 = document.getElementById("textscreen");
            element4.parentNode.removeChild(element4);
            var table = document.createElement('table');
            table.id = "grid";

            for (var i = 1; i <= size; i++){
                var tr = document.createElement('tr');
                for (var j = 1; j <= size; j++){
                    var td = document.createElement('td');
                    td.class = "b1";

                    td.onmousedown = function() {
                        if(this.className != "b2"){
                            this.className = "b2";
                        }else{
                            this.removeAttribute("Class");
                        }
                    }
                    tr.appendChild(td);
                    table.appendChild(tr);
                }
            }
            document.body.appendChild(table);
        }else{
            document.getElementById("error").innerHTML = "Size of board must be 20x20 or smaller";
        }
    }

    function drawBoard() {
  canvas = document.getElementById("canvas");
  context = canvas.getContext("2d");
  canvas.width = GRID_WIDTH * CELL_SIZE + 1;
  canvas.height = GRID_HEIGHT * CELL_SIZE + 1;
  context.clearRect(
    0,
    0,
    GRID_WIDTH * CELL_SIZE + 0.5,
    GRID_HEIGHT * CELL_SIZE + 0.5
  );
  canvas.addEventListener("mousedown", golOnClick, false);
  canvas.addEventListener("mousemove", golOnMouseMove, false);
  // putting this on the document in case the mouse is dragged outside the canvas and released.
  document.addEventListener("mouseup", golOnMouseUp, false);

  for (var x = 0.5; x <= GRID_HEIGHT * CELL_SIZE + 0.5; x += CELL_SIZE) {
    context.moveTo(x, 0);
    context.lineTo(x, GRID_WIDTH * CELL_SIZE);
  }

  for (var y = 0.5; y <= GRID_WIDTH * CELL_SIZE + 0.5; y += CELL_SIZE) {
    context.moveTo(0, y);
    context.lineTo(GRID_HEIGHT * CELL_SIZE, y);
  }

  context.strokeStyle = "#000";
  context.stroke();

  for (var cell in board.activeLocations) {
    c = board.activeLocations[cell];
    context.beginPath();
    context.rect(
      c.column * CELL_SIZE + 0.5,
      c.row * CELL_SIZE + 0.5,
      CELL_SIZE,
      CELL_SIZE
    );
    context.fillStyle = "#005A31";
    context.fill();
  }
}

    function nextGen23(){
        var grid = document.getElementById('grid');
        var arr = convertToArr(grid);
        for(var i = 0; i < 23; ++i) {
            arr = getNextGenArr(arr);
        }
        modifyGrid(grid, arr);
    }

    function oneGen(){
        var grid = document.getElementById('grid');
        var arr = convertToArr(grid);
        arr = getNextGenArr(arr);
        modifyGrid(grid, arr);
    }

    function randomPop(){
        var grid = document.getElementById('grid');
        var arr = getRandomArr();
        modifyGrid(grid, arr);
    }

    function resetPop(){
        var grid = document.getElementById('grid');
        var arr = getResetArr();
        modifyGrid(grid, arr);
    }

    function modifyGrid(grid, arr){
        for(var i = 0; i < grid.childNodes.length; ++i){
            for(var j = 0; j < grid.childNodes[i].childNodes.length; ++j){
                grid.childNodes[i].childNodes[j].className = arr[i][j] ? 'b2' : 'b1';
            }
        }
    }

    function getRandomArr(){
        var arr = [];
        for(var i = 0; i < mainSize; ++i){
            arr.push([]);
            for(var j = 0; j < mainSize; ++j){
                arr[i].push(Math.floor(Math.random() * 2) === 1 ? true: false);
            }
        }
        return arr;
    }

    function getResetArr(){
        var arr = [];
        for(var i = 0; i < mainSize; ++i){
            arr.push([]);
            for(var j = 0; j < mainSize; ++j){
                arr[i].push(false);
            }
        }
        return arr;
    }

    function isValid(i, j){
        return i >= 0 && j >= 0 && i < mainSize && j < mainSize;
    }

    function numLiveNeighbours(arr, i, j){
        var total = 0;
        if(isValid(i - 1, j - 1) && arr[i - 1][j - 1]) total += 1;
        if(isValid(i - 1, j)     && arr[i - 1][j]) total += 1;
        if(isValid(i - 1, j + 1) && arr[i - 1][j + 1]) total += 1;
        if(isValid(i, j - 1)     && arr[i][j - 1]) total += 1;
        if(isValid(i, j + 1)     && arr[i][j + 1]) total += 1;
        if(isValid(i + 1, j - 1) && arr[i + 1][j - 1]) total += 1;
        if(isValid(i + 1, j)     && arr[i + 1][j]) total += 1;
        if(isValid(i + 1, j + 1) && arr[i + 1][j + 1]) total += 1;
        return total;
    }

    function getNextGenArr(arr){
        var arr1 = [];
        for(var i = 0; i < mainSize; ++i){
            arr1.push([]);
            for(var j = 0; j < mainSize; ++j){
                var liveNeighbours = numLiveNeighbours(arr, i, j);
                if(arr[i][j]){
                    if(liveNeighbours < 2 || liveNeighbours > 3)
                        arr1[i].push(false);
                    else
                        arr1[i].push(true);
                }else{
                    if(liveNeighbours === 3){
                        arr1[i].push(true);
                    }
                    else{
                        arr1[i].push(false);
                    }
                }
            }
        }
        return arr1;
    }

    function convertToArr(grid){
        var arr = [];
        for(var i = 0; i < grid.childNodes.length; ++i){
            arr.push([]);
            for(var j = 0; j < grid.childNodes[i].childNodes.length; ++j){
                arr[i].push(alive(grid.childNodes[i].childNodes[j]));
            }
        }
        return arr;
    }

    function alive(td){
        return td.className === 'b2';
    }