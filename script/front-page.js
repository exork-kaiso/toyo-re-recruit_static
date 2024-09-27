"use strict";

{
  // ハンバーガーメニュー
  const body = document.body;
  const videoDialog = document.querySelector(".js-video");
  const videoOpenButton = document.querySelector(".js-video-link");
  const videoCloseButton = document.querySelector(".js-video-close");

  // メニューを開く
  videoOpenButton.addEventListener("click", () => {
    if (typeof videoDialog.showModal === "function") {
      body.classList.add("js-scroll-lock");
      videoDialog.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    videoOpenButton.classList.toggle("open");
  });

  // メニューを閉じる
  videoCloseButton.addEventListener("click", () => {
    body.classList.remove("js-scroll-lock");
    videoOpenButton.classList.toggle("open");
    videoDialog.close();
  });
}
