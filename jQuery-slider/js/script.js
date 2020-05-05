let i = 1;
let arr = $('img');

function nextPreviousImg(n) {
    i += n;
    if (i > arr.length - 1) {
        i = 0;
    }

    if (i < 0) {
        i = arr.length - 1;
    }

    for (let i = 0; i < arr.length; i++) {
        arr[i].style.display = 'none';
    }

    $('img')[i].style.display = 'block';
}

let imgLoop = function () {
    setTimeout(function () {
        nextPreviousImg(+1);
        imgLoop(); // restarts the function
    }, 2000);
};

imgLoop();