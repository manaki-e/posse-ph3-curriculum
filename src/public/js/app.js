function selectProcess(optionNumber, selectNumber) {
    //選択肢がクリックされたときの挙動

    let answerNumber = options[optionNumber].indexOf(answers[optionNumber]);
    document
        .getElementById(optionNumber + "_" + answerNumber)
        .classList.add("true"); //正解の選択肢を青くする
    document
        .getElementsByClassName("optionBox")
        [optionNumber].classList.add("clickedOptionBox"); // 二度クリックさせない

    if (options[optionNumber][selectNumber] === answers[optionNumber]) {
        //クリックされた選択肢と正解が一致
        document
            .getElementsByClassName("answerBox")
            [2 * optionNumber].classList.remove("correctBox"); //正解回答ボックスの表示
    } else {
        //クリックされた選択肢と正解が不一致
        document
            .getElementById(optionNumber + "_" + selectNumber)
            .classList.add("false"); //クリックした選択肢を赤くする
        document
            .getElementsByClassName("answerBox")
            [2 * optionNumber + 1].classList.remove("wrongBox"); //不正解回答ボックスの表示
    }
}
