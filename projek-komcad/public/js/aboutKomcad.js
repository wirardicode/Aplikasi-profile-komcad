
/*
document.addEventListener("DOMContentLoaded", function textEdit () {
    let text = document.getElementById("penjelasan");

    //set modify text from tag <b>
    text.textContent = < TEKS MODIFIKASI >;
    text.style.display = "flex";
});
*/
document.addEventListener('DOMContentLoaded', function transisi(){
 let paragraph = document.getElementById("penjelasan");

  // Set opasitas default
  paragraph.style.opacity = 0;

  // Fungsi opasity into 1
  function showParagraph() {
    paragraph.style.opacity = 1; // Mengatur opasitas menjadi 1
  }

  // fungsi timing ke per detik
  setTimeout(showParagraph, 3200);
});

