<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>

<header>
    <img src="./assets/heroBackground.jpg" alt="Header Image">
    <img id="graphNode" src="./assets/graphNode.svg" alt="dekorasi">
    <i>Muhammad Adeva</i>
    <i id="header-desc">Sophomore in Informatics Engineering at UPN "Veteran" Jawa Timur</i>
</header>

<?php
$pages = array(
    'about' => 'About Me',
    'education' => 'Education',
    'experience' => 'Experience',
    'contact' => 'Contact'
);
?>

<nav>
    <?php foreach ($pages as $page => $title): ?>
        <a href="#<?= $page ?>"><i><?= $title ?></i></a>
    <?php endforeach; ?>
    <a id="toggleButton">Dark Mode</a>
</nav>

<section id="about">
    <img src="./assets/aboutMe.png" alt="About Image">
    <div class="description">
        <h2 class="judul-section">About Me</h2>
        <p>
            I am an undergraduate student pursuing a Bachelor's degree in Informatics Engineering, with a passion for data analysis and learning new things. I have basic hard-skills in technology-related subjects, such as programming, database, and web development. I also have amazing soft-skills, such as problem-solving, public speaking, teaching, and project management.
            <br><br>
            I am a fast learner and a self-motivated individual. I have participated in KSN (Kompetisi Sains Nasional) at the provincial level, after only studying for about four months. I have also been a Master of Ceremony for the orientation program in my campus, demonstrating my leadership and communication skills.
            <br><br>
            My career goal is to become a great data analyst and gain valuable experience in various domains. I am looking for internship opportunities that will challenge me and help me grow as a professional. I am eager to apply my skills and knowledge to real-world problems and make a positive impact.
        </p>
    </div>
</section>

<section id="education">
    <div class="description" style="text-align: right;">
        <h2 class="judul-section">Education</h2>
        <ul id="kanan">
            <?php
            $schools = array("SDN Kranji XVII", "SMPN 2 Waru", "SMAN 1 Waru - IPA", "UPN \"Veteran\" Jawa Timur - Informatika");
            foreach ($schools as $school) {
                echo "<li class=\"sekolah\">$school</li>";
            }
            ?>
        </ul>
    </div>
    <img src="./assets/education.png" alt="Education Image">
</section>

<section id="experience">
    <img src="./assets/Experience.JPG" alt="Education Image">
    <div class="description">
        <h2 class="judul-section">Experience</h2>
        <table>
        <tr>
            <th>Role</th>
            <th>Event</th>
            <th>Year</th>
        </tr>
        <tr>
            <td>Master of Ceremony</td>
            <td>Divisi Acara Sonic</td>
            <td>2022</td>
        </tr>
        <tr>
            <td>Tenaga Pengajar</td>
            <td>Divisi Tenaga Pengajar Ngajar Kuy</td>
            <td>2022</td>
        </tr>
        <tr>
            <td>Koordinator Lapangan</td>
            <td>Divisi Acara VBC</td>
            <td>2023</td>
        </tr>
        <tr>
            <td>Kepala Divisi</td>
            <td>Divisi Acara PEMABA</td>
            <td>2023</td>
        </tr>
        <tr>
            <td>Master of Ceremony</td>
            <td>Divisi Acara BCD</td>
            <td>2023</td>
        </tr>
        <tr>
            <td>Kepala Divisi</td>
            <td>Divisi Tenaga Pengajar Himatifa Mengajar</td>
            <td>2023</td>
        </tr>
    </table>
    </div>
</section>

<?php
$socialMedia = array(
    'Whatsapp' => array(
        'link' => 'https://wa.me/+62895335665409',
        'img' => './assets/Whatsapp.png',
        'alt' => 'Whatsapp'
    ),
    'LinkedIn' => array(
        'link' => 'https://www.linkedin.com/in/muhammad-adeva-358117241/',
        'img' => './assets/linkedin.svg',
        'alt' => 'LinkedIn'
    ),
    'Instagram' => array(
        'link' => 'https://instagram.com/adevva._',
        'img' => './assets/instagram.png',
        'alt' => 'Instagram'
    )
);
?>

<section id="contact">
    <h2>Contact</h2>
    <div class="social-media-icons">
        <?php foreach ($socialMedia as $media): ?>
            <a target="_blank" href="<?= $media['link'] ?>">
                <img src="<?= $media['img'] ?>" alt="<?= $media['alt'] ?>">
            </a>
        <?php endforeach; ?>
    </div>
</section>


<footer>
    <p>Muhammad Adeva - 22081010077</p>
</footer>
</body>

<script>
    $("#toggleButton").click(function(){
        $("body").toggleClass("dark-mode");
    })
</script>
    
    
</html>
