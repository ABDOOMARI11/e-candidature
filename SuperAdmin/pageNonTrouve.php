<?php
include '../Translation/headerTranslationCandidatConnect.php';
?>
<!DOCTYPE html>
<html <?php echo $_SESSION['lang'] === 'arabic' ? 'lang="ar" dir="rtl"' : 'lang="fr" dir="ltr"'; ?>>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>E-candidature</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../node_modules/sweetalert/dist/sweetalert.css">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="../node_modules/sweetalert/dist/sweetalert.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
      margin: 0;
      overflow: hidden; 
    }
    svg {
      width: 100vw;
      height: 100vh;
      display: block; 
    }
  </style>
<body>


    <div class="flex flex-col items-center justify-center custom-container gap-12 py-8"> <svg
            class="h-[50vh] aspect-video" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500">
            <g id="freepik--background-simple--inject-3">
                <path
                    d="M55.48,273.73s2.32,72,62.43,120,143.41,51.43,210.84,56,119.23-33.62,127-91.32-43.72-74.64-71.68-140.33S358.64,130.8,299.49,90.4,147.8,74.81,99.29,144,55.48,273.73,55.48,273.73Z"
                    style="fill:#3B82F6"></path>
                <path
                    d="M55.48,273.73s2.32,72,62.43,120,143.41,51.43,210.84,56,119.23-33.62,127-91.32-43.72-74.64-71.68-140.33S358.64,130.8,299.49,90.4,147.8,74.81,99.29,144,55.48,273.73,55.48,273.73Z"
                    style="fill:#fff;opacity:0.7000000000000001"></path>
            </g>
            <g id="freepik--Padlock--inject-3">
                <path
                    d="M83.61,179.69V153.92c0-18.24,15.16-33.08,33.79-33.08s33.79,14.84,33.79,33.08v25.77h13.47V153.92c0-25.51-21.2-46.27-47.26-46.27s-47.26,20.76-47.26,46.27v25.77Z"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <rect x="65.14" y="179.87" width="103.18" height="85.35"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <path
                    d="M127.46,215.32a11.24,11.24,0,0,0-22.47,0,11,11,0,0,0,5.9,9.68L109,244.38h14.45L121.56,225A11,11,0,0,0,127.46,215.32Z"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
            </g>
            <g id="freepik--Character--inject-3">
                <polygon
                    points="232.64 267.99 206.95 266.3 206.95 265.88 203.79 266.09 200.64 265.88 200.64 266.3 174.95 267.99 156 423.79 174.95 423.79 203.16 299.57 204.43 299.57 232.64 423.79 251.59 423.79 232.64 267.99"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <path
                    d="M156,423.78l-4.63,7.16-14.32,6.32a4.88,4.88,0,0,0-2.52,4.21v5.47h40.84a54.21,54.21,0,0,0,0-8.84c-.42-4.21-.42-14.32-.42-14.32Z"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path d="M134.53,442.31v4.63h40.84s.19-2,.19-4.63Z"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M251.51,423.78l4.63,7.16,14.32,6.32a4.88,4.88,0,0,1,2.52,4.21v5.47H232.14a54.21,54.21,0,0,1,0-8.84c.42-4.21.42-14.32.42-14.32Z"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path d="M273,442.31v4.63H232.14s-.18-2-.19-4.63Z"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M164.07,195.51s-30,42.16-30,45.25,4.77,26.95,12.35,29.19,11.79-1.68,13.19-9.54-3.37-19.09-3.37-19.09l14-12.63Z"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M158.25,259.29s8.7-1.41,10.95-.85,3.93,5.9,3.93,5.9.84,7.86-.57,9.54-8.14,3.65-10.94,4.21-8.71-5.89-11-9.82S152.35,257.6,158.25,259.29Z"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <polygon
                    points="170.38 193.6 164.07 195.51 174.01 261.86 233.09 261.86 242.08 195.89 234.05 192.83 204.41 186.33 170.38 193.6"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="236.34 215.78 235.01 225.34 224.68 227.82 214.16 223.62 214.93 215.01 236.34 215.78"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <circle cx="225.35" cy="223.52" r="1.82"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </circle>
                <polygon
                    points="198.1 198.57 203.65 205.07 196.57 250.19 204.03 262.05 212.83 249.62 205.37 205.26 211.68 199.14 204.99 190.54 198.1 198.57"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="192.75 187.29 167.32 193.6 168.09 196.66 192.94 189.77 192.75 187.29"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="213.59 186.52 239.02 192.83 238.26 195.89 213.4 189.01 213.59 186.52"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <path d="M239,192.83s9.62,2.17,15.51,5.54,7.3,10.95,3.93,19.37-13.75,7.3-18.52,5-6.18-10.66-5.34-14.31"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <polygon
                    points="193.9 184.04 191.03 185.95 191.79 205.26 204.22 196.47 217.22 205.45 218.37 186.33 214.93 183.46 193.9 184.04"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <path
                    d="M219,161.07s7.06-1.72,8.39-8.78S216,136.64,207.18,135.12s-21.75,7.63-23.85,13.93,6.1,12.59,14.88,13.93S219,161.07,219,161.07Z"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path d="M192.68,162.22s-3.82-5.92-4.77-.77,3.05,7.44,4.77,7.25S192.68,162.22,192.68,162.22Z"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path d="M217.49,162.22s3.82-5.92,4.77-.77-3,7.44-4.77,7.25S217.49,162.22,217.49,162.22Z"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <polygon points="193.52 173.9 193.52 186.52 204.22 196.47 216.27 186.14 216.27 174.29 193.52 173.9"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <path
                    d="M191.92,158.4s-.58,11.83.38,15.65,7.25,11.83,12.21,13.55,11.83-8.59,13.36-12,.95-17.94.95-17.94-2.09-5-6.29-6.48S195.35,147,191.92,158.4Z"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M199.85,164.68c0,.9-.41,1.63-.92,1.63s-.92-.73-.92-1.63.41-1.63.92-1.63S199.85,163.78,199.85,164.68Z"
                    style="fill:#263238"></path>
                <path
                    d="M211.56,164.68c0,.9-.41,1.63-.92,1.63s-.92-.73-.92-1.63.41-1.63.92-1.63S211.56,163.78,211.56,164.68Z"
                    style="fill:#263238"></path>
                <path
                    d="M201.84,169.24a1.28,1.28,0,1,0,0,2.49,1.74,1.74,0,0,0,1.11-.37,3.21,3.21,0,0,0,4.82.08,1.8,1.8,0,0,0,1,.29,1.28,1.28,0,1,0,0-2.49"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <line x1="203.36" y1="177.07" x2="207.35" y2="177.07"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <path d="M191.48,161.27s.14,3.84,1.42,2.84,1.7-7.52.57-8.37S191.48,159.29,191.48,161.27Z"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path d="M216.11,161.27s.15,3.84,1.42,2.84,1.71-7.52.57-8.37S216.11,159.29,216.11,161.27Z"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M191.48,158.15s.43.35.42.52c1.85,1,6.1,2.84,13,3.21a26.56,26.56,0,0,0,14-3.43c0-.51,0-.81,0-.82-.17-4.47-3.49-7.45-7.6-8.59a19.57,19.57,0,0,0-12.24.61,12,12,0,0,0-5.07,3.65C193.48,153.86,190.78,157.59,191.48,158.15Z"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <path
                    d="M191.92,158.4a45.19,45.19,0,0,0,13,.95c8.21-.38,13.92-.95,13.92-.95a22.64,22.64,0,0,1-13.8,6.06A15.14,15.14,0,0,1,191.92,158.4Z"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <polygon points="170.96 215.78 172.29 225.34 182.62 227.82 193.13 223.62 192.37 215.01 170.96 215.78"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <circle cx="181.95" cy="223.52" r="1.82"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </circle>
                <rect x="173.13" y="261.25" width="60.63" height="9.54"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <rect x="168.92" y="261.81" width="18.53" height="11.79" rx="2.67"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <rect x="217.2" y="261.81" width="18.53" height="11.79" rx="2.67"
                    style="fill:#4c4c4c;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <rect x="197.83" y="261.81" width="13.19" height="8.42"
                    style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <path d="M156.28,241.32s-8.42-.56-11.51-5.9"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <ellipse cx="249.9" cy="202.02" rx="13.9" ry="14.6"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </ellipse>
                <ellipse cx="249.9" cy="194.63" rx="10.88" ry="9.75"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </ellipse>
                <ellipse cx="249.9" cy="187.46" rx="10.88" ry="9.75"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </ellipse>
                <path
                    d="M232.42,166.44s.19,14.38.92,18.62,3.69,9.77,7.75,9.77a25.53,25.53,0,0,0,7.93-1.47s4.79,2.58,9.4,1.84,3.87-7.19,3.87-10-.55-23.6-.55-23.6.37-2-1.48-2.39a15.8,15.8,0,0,0-2.76-.37v-4.43a3.36,3.36,0,0,0-3.14-1.47c-2.39,0-2.58.55-2.58.55v-4.06s-2-3.23-4.61-1.66a3.68,3.68,0,0,0-1.84,2.95l-.19,3.88s-4.42-1.66-4.79.92S239.24,174,239.24,174a40.86,40.86,0,0,0-1.47-7.38C236.85,164.22,232.42,164.22,232.42,166.44Z"
                    style="fill:#ccc;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
                <line x1="245.14" y1="154.64" x2="245.51" y2="171.6"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <line x1="251.78" y1="153.53" x2="251.97" y2="171.78"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <line x1="257.5" y1="158.88" x2="257.13" y2="171.6"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <line x1="242.75" y1="171.42" x2="259.53" y2="172.15"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <path d="M239.24,174a4.51,4.51,0,0,0,1.81,3.58c1.82,1.14,5.92,4.1,6.37,8.88"
                    style="fill:none;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </path>
            </g>
            <g id="freepik--Text--inject-3">
                <path d="M350,128.81V131h-5.33v7.76h6.55V141h-9v-21.8h9v2.21h-6.55v7.44Z" style="fill:#263238"></path>
                <path
                    d="M358.3,119.16c3.42,0,4.86,1.74,4.86,5v1.78c0,2.4-.84,3.89-2.71,4.48,2,.59,2.74,2.21,2.74,4.55v3.4a5.49,5.49,0,0,0,.43,2.61h-2.46a5.7,5.7,0,0,1-.4-2.64v-3.43c0-2.46-1.15-3.24-3.18-3.24h-1.71V141h-2.43v-21.8Zm-.63,10.28c1.94,0,3.09-.63,3.09-3v-2.09c0-2-.72-3-2.52-3h-2.37v8.07Z"
                    style="fill:#263238"></path>
                <path
                    d="M370.57,119.16c3.43,0,4.86,1.74,4.86,5v1.78c0,2.4-.84,3.89-2.71,4.48,2,.59,2.74,2.21,2.74,4.55v3.4a5.37,5.37,0,0,0,.44,2.61h-2.46a5.66,5.66,0,0,1-.41-2.64v-3.43c0-2.46-1.15-3.24-3.18-3.24h-1.71V141h-2.43v-21.8ZM370,129.44c1.93,0,3.08-.63,3.08-3v-2.09c0-2-.71-3-2.52-3h-2.37v8.07Z"
                    style="fill:#263238"></path>
                <path
                    d="M377.8,124.42c0-3.33,1.65-5.48,5-5.48s5,2.15,5,5.48V135.7c0,3.3-1.65,5.48-5,5.48s-5-2.18-5-5.48Zm2.4,11.4c0,2,.84,3.15,2.58,3.15s2.59-1.15,2.59-3.15V124.3c0-2-.81-3.15-2.59-3.15s-2.58,1.18-2.58,3.15Z"
                    style="fill:#263238"></path>
                <path
                    d="M395,119.16c3.43,0,4.86,1.74,4.86,5v1.78c0,2.4-.84,3.89-2.71,4.48,2,.59,2.74,2.21,2.74,4.55v3.4a5.37,5.37,0,0,0,.44,2.61h-2.46a5.66,5.66,0,0,1-.41-2.64v-3.43c0-2.46-1.15-3.24-3.18-3.24h-1.71V141H390.1v-21.8Zm-.62,10.28c1.93,0,3.08-.63,3.08-3v-2.09c0-2-.71-3-2.52-3h-2.37v8.07Z"
                    style="fill:#263238"></path>
                <path d="M329.38,264.88v2.21h-5v9.44h-2.43v-21.8h8.66v2.21h-6.23v7.94Z" style="fill:#263238"></path>
                <path
                    d="M332.33,260c0-3.33,1.66-5.48,5-5.48s5,2.15,5,5.48v11.28c0,3.3-1.65,5.48-5,5.48s-5-2.18-5-5.48Zm2.4,11.4c0,2,.84,3.15,2.59,3.15s2.58-1.15,2.58-3.15V259.87c0-2-.81-3.15-2.58-3.15s-2.59,1.18-2.59,3.15Z"
                    style="fill:#263238"></path>
                <path
                    d="M349.5,254.73c3.42,0,4.86,1.74,4.86,5v1.78c0,2.4-.84,3.89-2.71,4.48,2,.59,2.74,2.21,2.74,4.55v3.4a5.37,5.37,0,0,0,.44,2.61h-2.46a5.53,5.53,0,0,1-.41-2.64v-3.43c0-2.46-1.15-3.24-3.18-3.24h-1.71v9.31h-2.43v-21.8ZM348.88,265c1.93,0,3.08-.63,3.08-3v-2.09c0-2-.72-3-2.52-3h-2.37V265Z"
                    style="fill:#263238"></path>
                <path
                    d="M361.8,254.73c3.4,0,4.74,1.62,4.74,4.83v1c0,2.31-.66,3.74-2.56,4.33,2.12.6,2.93,2.28,2.93,4.68v1.83c0,3.28-1.59,5.11-5,5.11h-5v-21.8Zm-.59,9.25c1.93,0,2.93-.62,2.93-2.9V259.8c0-1.93-.66-2.86-2.4-2.86h-2.4v7Zm.72,10.34c1.77,0,2.58-.93,2.58-3v-1.93c0-2.43-1-3.24-3.05-3.24h-2.12v8.13Z"
                    style="fill:#263238"></path>
                <path d="M371.55,254.73v21.8h-2.43v-21.8Z" style="fill:#263238"></path>
                <path
                    d="M379.15,254.73c3.4,0,5,2,5,5.42v11c0,3.34-1.56,5.39-5,5.39h-5.1v-21.8Zm0,19.59c1.75,0,2.59-1.09,2.59-3.08V260c0-2-.84-3.08-2.62-3.08h-2.62v17.38Z"
                    style="fill:#263238"></path>
                <path
                    d="M391.49,254.73c3.39,0,4.95,2,4.95,5.42v11c0,3.34-1.56,5.39-4.95,5.39h-5.11v-21.8Zm0,19.59c1.74,0,2.58-1.09,2.58-3.08V260c0-2-.84-3.08-2.61-3.08h-2.62v17.38Z"
                    style="fill:#263238"></path>
                <path d="M406.47,264.38v2.18h-5.33v7.76h6.55v2.21h-9v-21.8h9v2.21h-6.55v7.44Z" style="fill:#263238">
                </path>
                <path d="M412.08,276.53H409.9v-21.8H413l5,15.76V254.73h2.15v21.8h-2.53l-5.57-17.63Z"
                    style="fill:#263238"></path>
                <path
                    d="M306.54,208.26l22.25-52.61h13.35v52.61h5.78v11.12h-5.78V233.5h-12V219.38H306.54Zm23.58,0V179l-12.34,29.25Z"
                    style="fill:#263238"></path>
                <path
                    d="M352.48,174.33c0-12.45,6.56-19.57,18.57-19.57s18.58,7.12,18.58,19.57v40.49c0,12.46-6.57,19.57-18.58,19.57s-18.57-7.11-18.57-19.57Zm12.23,41.27c0,5.56,2.45,7.67,6.34,7.67s6.34-2.11,6.34-7.67v-42c0-5.57-2.44-7.68-6.34-7.68s-6.34,2.11-6.34,7.68Z"
                    style="fill:#263238"></path>
                <path
                    d="M421.1,174.78c0-7-2.44-8.9-6.34-8.9s-6.34,2.11-6.34,7.68v5H396.86v-4.23c0-12.45,6.22-19.57,18.24-19.57s18.24,7.12,18.24,19.57v2c0,8.34-2.67,13.57-8.57,16,6.12,2.67,8.57,8.45,8.57,16.35v6.12c0,12.46-6.23,19.57-18.24,19.57s-18.24-7.11-18.24-19.57v-6.45h11.56v7.23c0,5.56,2.45,7.67,6.34,7.67s6.34-1.89,6.34-8.78v-6.12c0-7.23-2.44-9.9-8-9.9H409V187.35h4.78c4.56,0,7.34-2,7.34-8.23Z"
                    style="fill:#263238"></path>
            </g>
            <g id="freepik--security-barrier--inject-3">
                <polygon points="86.87 446.5 72.61 446.5 91.62 313.99 105.88 313.99 86.87 446.5"
                    style="fill:#263238;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="115.39 446.5 129.64 446.5 110.63 313.99 96.38 313.99 115.39 446.5"
                    style="fill:#fff;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></polygon>
                <polygon points="289.18 446.5 274.93 446.5 293.93 313.99 308.19 313.99 289.18 446.5"
                    style="fill:#263238;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="317.7 446.5 331.95 446.5 312.94 313.99 298.69 313.99 317.7 446.5"
                    style="fill:#fff;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></polygon>
                <rect x="55.73" y="293.21" width="271.93" height="26.36"
                    style="fill:#3B82F6;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></rect>
                <rect x="62.36" y="293.21" width="271.93" height="26.36"
                    style="fill:#3B82F6;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></rect>
                <polygon points="66.81 319.57 89.89 319.57 101.82 293.21 78.74 293.21 66.81 319.57"
                    style="fill:#263238"></polygon>
                <polygon points="158.17 293.21 135.09 293.21 123.16 319.57 146.24 319.57 158.17 293.21"
                    style="fill:#263238"></polygon>
                <polygon points="327.21 293.21 304.13 293.21 292.21 319.57 315.29 319.57 327.21 293.21"
                    style="fill:#263238"></polygon>
                <polygon points="270.87 293.21 247.78 293.21 235.86 319.57 258.94 319.57 270.87 293.21"
                    style="fill:#263238"></polygon>
                <polygon points="214.52 293.21 191.44 293.21 179.51 319.57 202.59 319.57 214.52 293.21"
                    style="fill:#263238"></polygon>
                <line x1="332.8" y1="304.9" x2="287.8" y2="304.9"
                    style="fill:none;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></line>
                <line x1="332.01" y1="309.31" x2="324.91" y2="309.31"
                    style="fill:none;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></line>
                <line x1="61.21" y1="308.21" x2="106.21" y2="308.21"
                    style="fill:none;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></line>
                <line x1="62" y1="303.25" x2="118.84" y2="303.25"
                    style="fill:none;stroke:#263238;stroke-miterlimit:10;stroke-width:1.166343341900884px"></line>
                <rect x="331.37" y="440.72" width="77.14" height="5.79"
                    style="fill:#263238;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </rect>
                <polygon points="395.49 440.56 344.39 440.56 364.42 331.6 375.46 331.6 395.49 440.56"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <polygon points="356.98 372.1 382.91 372.1 380.42 358.6 359.46 358.6 356.98 372.1"
                    style="fill:#fff;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </polygon>
                <line x1="387.81" y1="422.37" x2="389.09" y2="429.82"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
                <line x1="373.22" y1="337.62" x2="386.2" y2="413"
                    style="fill:#3B82F6;stroke:#263238;stroke-linecap:round;stroke-linejoin:round;stroke-width:1.166343341900884px">
                </line>
            </g>
        </svg>
        <div class="flex flex-col items-center gap-4">
            <h1 class="text-3xl font-medium text-center">
                You are not authorized
            </h1>
            <p class="text-xl text-center ">
                You tried to access a page you did not have prior
                authorization for.
            </p>
        </div>
    </div>

    <script>
        const lang = <?php echo json_encode($lang); ?>;
    </script>
    <script src="Translation/language.js"></script>

    <script>
        const lang = <?php echo json_encode($lang); ?>;
    </script>
    <script src="../Translation/languageConncet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
