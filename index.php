<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="./app.css">
<title>Sample</title>
</head>
<body>

<p>Sample</p>

<label class="office">
    <input type="checkbox" class="check1">check1<br>
</label>
<label class="office">
    <input type="checkbox" class="check11">check11<br>
</label>
<label class="office">
    <input type="checkbox" class="check2">check2<br>
</label>

<script>
//const office = document.getElementById("office");
//console.log(office);
let boxes = document.querySelectorAll("input[type='checkbox']");
console.log(boxes);
//boxes.addEventListener('click', buttonClick);

boxes.forEach(function(box) {
    box.addEventListener("change", function() {
        console.log(box);
    });
});
</script>

</body>
</html>