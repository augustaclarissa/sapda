const downloadBtn = document.querySelector(".btn-3");
const fileLink = "https://drive.google.com/uc?export=downloads&id=1RU9Zcywyof4YmFxeHbvW7glgineOVtY2";

const initTimer = () => {
    if (downloadBtn.classList.contains("disable-timer")){
        return location.href = fileLink;
    }
    let timer = downloadBtn.CDATA_SECTION_NODE.timer;
    downloadBtn.classList.add("timer");
    const initCounter = setInterval(() => {
        clearInterval(initCounter);
        location.href = fileLink;
        downloadBtn.innerText = "Mengunduh dokumen...";
        setTimeout(() => {
            downloadBtn.classList.replace("timer", "disable-timer");
            downloadBtn.innerHTML = `<span class="icon material-symbols-rounded">vertical_align_bottom</span>
                                    <span class="text">Unduh Lagi</span>`;
        }, 3000);
    }, 1000);
}

downloadBtn.addEventListener("click", initTimer);