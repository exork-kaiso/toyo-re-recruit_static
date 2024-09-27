"use strict";

{
  // ローディング画面
  // const loading = document.querySelector("#loading");
  // const reveal = document.querySelector("#reveal");
  // window.addEventListener("load", () => {
  //   setTimeout(() => {
  //     loading.classList.add("hide");
  //     reveal.classList.add("show");
  //   }, 500);
  //   loading.addEventListener("transitionend", () => {
  //     loading.classList.add("disappear");
  //     body.classList.remove("js-scroll-lock");
  //   });
  // });

  // ハンバーガーメニュー
  const body = document.body;
  const dialogElement = document.querySelector(".js-dialog");
  const dialogOpenButton = document.querySelector(".js-dialog-open");
  const dialogCloseButton = document.querySelector(".js-dialog-close");

  // const dialogLinks = document.querySelectorAll(".js-dialogLink");
  // dialogLinks.forEach((dialogLink) => {
  //   dialogLink.addEventListener("click", () => {
  //     body.classList.remove("js-scroll-lock");
  //     dialogElement.close();
  //   });
  // });

  // メニューを開く
  dialogOpenButton.addEventListener("click", () => {
    if (typeof dialogElement.showModal === "function") {
      body.classList.add("js-scroll-lock");
      dialogElement.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    dialogOpenButton.classList.toggle("open");
  });

  // メニューを閉じる
  dialogCloseButton.addEventListener("click", () => {
    body.classList.remove("js-scroll-lock");
    dialogOpenButton.classList.toggle("open");
    dialogElement.close();
  });

  document.addEventListener("DOMContentLoaded", function () {
    // ヘッダーの高さを取得
    // let headerHeight = document.getElementById("header").offsetHeight;
    let headerHeight = 132;
    let speed = 600;

    // すべてのアンカータグを取得
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
      anchor.addEventListener("click", function (event) {
        event.preventDefault(); // デフォルトの動作をキャンセル

        let href = this.getAttribute("href");
        let target = document.querySelector(
          href === "#" || href === "" ? "html" : href
        );
        let position = target.offsetTop - headerHeight;

        // スムーススクロールを実現
        window.scrollTo({
          top: position,
          behavior: "smooth",
        });
      });
    });
  });
}
