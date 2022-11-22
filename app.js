const inputs = document.querySelectorAll(".input");


function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

function Forminput(){
  for(i = length; i > n; i--)
{
  document.myform.select[i] = document.form1.select1[i - 1];
}
document.form1.select1[n] = new Option("new name");
};