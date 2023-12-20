<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading...</title>
    <style>
        .loading {
 --speed-of-animation: 0.9s;
 --gap: 6px;
 --first-color: #4c86f9;
 --second-color: #49a84c;
 --third-color: #f6bb02;
 --fourth-color: #f6bb02;
 --fifth-color: #2196f3;
 display: flex;
 justify-content: center;
 align-items: center;
 gap: 6px;
 z-index: 1000;
 background: var(--facebook-color);
 position: fixed;
 top: 0;
 left: 0;
 right: 0;
 bottom: 0;
}

.loading span {
 width: 4px;
 height: 50px;
 background: var(--first-color);
 animation: scale var(--speed-of-animation) ease-in-out infinite;
}

.loading span:nth-child(2) {
 background: var(--second-color);
 animation-delay: -0.8s;
}

.loading span:nth-child(3) {
 background: var(--third-color);
 animation-delay: -0.7s;
}

.loading span:nth-child(4) {
 background: var(--fourth-color);
 animation-delay: -0.6s;
}

.loading span:nth-child(5) {
 background: var(--fifth-color);
 animation-delay: -0.5s;
}

@keyframes scale {
 0%, 40%, 100% {
  transform: scaleY(0.05);
 }

 20% {
  transform: scaleY(1);
 }
}
    </style>
</head>
<body>

<div class="loading" id="loader">
  <span></span>
  <span></span>
  <span></span>
  <span></span>
  <span></span>
</div>
<!-- <h1>hello dear</h1> -->

<script>
        window.onload = function () {
            // Hide the loader
            document.getElementById('loader').style.display = 'none';

            // Show the content
            // document.getElementById('content').style.display = 'block';
        };
    </script>

</body>
</html>