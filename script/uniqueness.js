"use strict";

{
  // スクロールヒント
  new ScrollHint(".js-scrollable");

  // モーダルの挙動
  const body = document.body;
  const glanceOpenButton06 = document.querySelector(".js-glance-06");
  const glanceOpenButton07 = document.querySelector(".js-glance-07");
  const glanceOpenButton08 = document.querySelector(".js-glance-08");
  const glanceOpenButton09 = document.querySelector(".js-glance-09");
  const glanceOpenButton15 = document.querySelector(".js-glance-15");
  const glanceOpenButton16 = document.querySelector(".js-glance-16");
  const glanceOpenButton17 = document.querySelector(".js-glance-17");

  const glanceDialog = document.querySelectorAll(".js-glance-dialog");
  const glanceOpenButton = document.querySelectorAll(".js-glance-open");
  const glanceCloseButton = document.querySelectorAll(".js-glance-close");

  const glanceDialog06 = document.querySelector(".js-glance-dialog-06");
  const glanceDialog07 = document.querySelector(".js-glance-dialog-07");
  const glanceDialog08 = document.querySelector(".js-glance-dialog-08");
  const glanceDialog09 = document.querySelector(".js-glance-dialog-09");
  const glanceDialog15 = document.querySelector(".js-glance-dialog-15");
  const glanceDialog16 = document.querySelector(".js-glance-dialog-16");
  const glanceDialog17 = document.querySelector(".js-glance-dialog-17");

  // モーダルを閉じる
  for (let i = 0; i < glanceCloseButton.length; i++) {
    glanceCloseButton[i].addEventListener("click", () => {
      body.classList.remove("js-scroll-lock");
      glanceOpenButton[i].classList.toggle("open");
      glanceDialog[i].close();
    });
  }

  // モーダルを開く（06）
  glanceOpenButton06.addEventListener("click", () => {
    if (typeof glanceDialog06.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog06.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton06.classList.toggle("open");
  });

  // モーダルを開く（07）
  glanceOpenButton07.addEventListener("click", () => {
    if (typeof glanceDialog07.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog07.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton07.classList.toggle("open");
  });

  // モーダルを開く（08）
  glanceOpenButton08.addEventListener("click", () => {
    if (typeof glanceDialog08.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog08.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton08.classList.toggle("open");
  });

  // モーダルを開く（09）
  glanceOpenButton09.addEventListener("click", () => {
    if (typeof glanceDialog09.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog09.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton09.classList.toggle("open");
  });

  // モーダルを開く（15）
  glanceOpenButton15.addEventListener("click", () => {
    if (typeof glanceDialog15.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog15.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton15.classList.toggle("open");
  });

  // モーダルを開く（16）
  glanceOpenButton16.addEventListener("click", () => {
    if (typeof glanceDialog16.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog16.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton16.classList.toggle("open");
  });

  // モーダルを開く（17）
  glanceOpenButton17.addEventListener("click", () => {
    if (typeof glanceDialog17.showModal === "function") {
      body.classList.add("js-scroll-lock");
      glanceDialog17.showModal();
    } else {
      alert("dialog要素をサポートしていないブラウザです。");
    }
    glanceOpenButton17.classList.toggle("open");
  });
}
