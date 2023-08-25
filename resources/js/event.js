document.addEventListener("DOMContentLoaded", function (event) {
    Echo.channel("antrian-channel").listen("AntrianEvent", (e) => {
        // alert("berhasil ngelisten");
        console.table(e);
    });
});
