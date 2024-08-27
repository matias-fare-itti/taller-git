<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Text Color</title>
    <style>
        #text {
            font-size: 24px;
            color: black;
        }
    </style>
    <script>
        function changeColor() {
            const colors = ['red', 'blue'];
            const textElement = document.getElementById('text');
            const currentColor = textElement.style.color;
            let newColor = colors[Math.floor(Math.random() * colors.length)];
            
            // Ensure the new color is different from the current color
            while (newColor === currentColor) {
                newColor = colors[Math.floor(Math.random() * colors.length)];
            }
            
            textElement.style.color = newColor;
        }
    </script>
</head>
<body>
    <div id="text">This is some text!</div>
    <button onclick="changeColor()">Change Text Color</button>
</body>
</html>
