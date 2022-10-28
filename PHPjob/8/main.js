
function changeLang() {
  const selectBox = document.querySelector('#select_box').value;
  if(selectBox === "selected_all") {
    document.getElementById('tr-jpn').style.display = "block";
    document.getElementById('tr-en').style.display = "block";
  } else if(selectBox === "selected_jpn") {
    document.getElementById('tr-en').style.display = "none";
    document.getElementById('tr-jpn').style.display = "block";
  } else if(selectBox === "selected_en") {
    document.getElementById('tr-jpn').style.display = "none";
    document.getElementById('tr-en').style.display = "block";
  } else {
    window.alert('選択してください！');
  }
}