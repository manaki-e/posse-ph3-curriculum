function selectProcess(optionNumber, selectNumber, valid) {
    //選択肢がクリックされたときの挙動

    // 選択された項目に関わらず実行
    // 正解の選択肢を青くする
    document
        .getElementsByClassName("optionBox")
        [optionNumber - 1].querySelector('[data-answer="1"]')
        .classList.add("bg-blue-500", "text-white"); //正解の選択肢を青くする
    // 二度クリックさせない
    document
        .getElementsByClassName("optionBox")
        [optionNumber - 1].classList.add("pointer-events-none");
    // 結果boxの表示
    document
        .getElementsByClassName("answerBox")
        [optionNumber - 1].classList.remove("hidden");
    // 答えを挿入
    document.getElementsByClassName("answer")[optionNumber - 1].innerHTML =
        document
            .getElementsByClassName("optionBox")
            [optionNumber - 1].querySelector('[data-answer="1"]').innerHTML;

    // 選択された項目に対する変更
    if (valid == 1) {
        // クリックされた選択肢と正解が一致
        // 正解文表示
        document.getElementsByClassName("resultText")[
            optionNumber - 1
        ].innerHTML = "正解！";
        // 正解文にクラス名を付与
        document.getElementsByClassName("resultText")[
            optionNumber - 1
        ].classList.add("before:border-b-blue-600")
    } else {
        // クリックされた選択肢と正解が不一致
        // クリックした選択肢を赤くする
        document
        .getElementById(optionNumber + "-" + selectNumber)
        .classList.add("bg-red-500", "text-white");
        // 不正解文表示
        document.getElementsByClassName("resultText")[
            optionNumber - 1
        ].innerHTML = "不正解！";
        // 不正解文にクラス名を付与
        document.getElementsByClassName("resultText")[
            optionNumber - 1
        ].classList.add("before:border-b-red-600")
    }
}
