var boxshow = document.getElementById('js-boxshow');

var dimensions = 80;

var charArray = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
var charPair = '';
var letters = [];
var count = 0;

var list = [];
var random = 0;
var i = 0;

var generateLetters = function(){

    if (count%2 == 0) {  
        random = Math.floor(Math.random() * charArray.length);
        letters.push(charArray[random]);
        charPair = charArray[random];

        do {
            random = Math.floor(Math.random() * charArray.length);
        } while (charArray[random] === charPair); // to insure different pairs.

        letters.push(charArray[random]);
        letters.push(charArray[random]);
    } else {
        letters.push(charPair);

        do {
            random = Math.floor(Math.random() * charArray.length);
        } while (charArray[random] === charPair); // to insure different pairs.

        charPair = charArray[random];
        letters.push(charPair);
        letters.push(charPair);
    }

    ++count;
    letters = fisherYates(letters);
};

var generateBoxes = function () {

    generateLetters();

    for (i = 0; i < 3; ++i) {
        var box = document.createElement('DIV');
        box.style.height = dimensions + 'px';
        box.style.width = dimensions + 'px';
        box.className = 'box';

        var p = document.createElement('P');
        p.style.marginTop = dimensions*0.25+'px';
        p.style.fontSize = dimensions*0.25+'px';
        p.innerHTML = letters[i];
        box.appendChild(p);

        dimensions += 20;

        box.addEventListener('click', boxClick);
        boxshow.appendChild(box);
    }
    letters = [];
};

var boxClick = function () {
    if (list.length >= 2) {
        clearItems();
    }

    if (!this.className.includes('show')) {
        if (!this.className.includes('correct')) {
            this.className = this.className + ' show';
            list.push(this);
            if (list.length == 2) {
                checkGame();
            }
        }
    }
    else {
        clearItems();
    }
};

//randomize Array
var fisherYates = function (sourceArray) {
    for (i = 0; i < sourceArray.length - 1; ++i) {
        var j = i + Math.floor(Math.random() * (sourceArray.length - i));

        var temp = sourceArray[j];
        sourceArray[j] = sourceArray[i];
        sourceArray[i] = temp;
    }
    return sourceArray;
};

var compareValues = function () {
    var str1 = list[0].innerHTML;
    var str2 = list[1].innerHTML;

    var index = str1.indexOf('">');
    var slashIndex = str1.indexOf('</p');
    var fstr1 = str1.substring(index + 2, slashIndex);

    index = str2.indexOf('">');
    slashIndex = str2.indexOf('</p');
    var fstr2 = str2.substring(index + 2, slashIndex);

    if (fstr1 == fstr2)
        return true;
    return false;
};

//clears items in Array
var clearItems = function () {
    for (i = 0; i < list.length; ++i) {
        list[i].className = list[i].className.replace('show', '');
    }
    list = [];
};

//checks game status
var checkGame = function () {
    if (compareValues()) {
        for (i = 0; i < list.length; ++i) {
            list[i].className = list[i].className.replace('show', 'correct');
        }
    }
    else {
        setTimeout(function () { //timer delay after 0.5 sec to show the letter.
            clearItems();
        }, 500);
    }
};