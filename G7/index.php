<!DOCTYPE html>
<html>
<head>
    <div class="group-name">BSIT 3L - Group 7</div>
    <p class="group-description">"Integrative Programming"</p>
<div class="team-members">
    </div>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- end of base -->


    <div class="team-members">
        <div class="team-member">
            <input type="file" id="imageUpload1" accept="image/*" />
            <img id="imagePreview1" src="image1.png" alt="Team Member 1">
            <h2>Rechelle</h2>
            <div class="role-label">Role</div>
            <p class="role">"Group Member"</p>
            <div class="contact-label">Contact</div>
            <p class="contact">candidorechelleanne@gmail.com</p>
            <div class="bio-label">Bio</div>
            <p class="bio">"I'm Rechelle Anne Candido, a third-year BSIT student. A working student, 
                nail tech, makeup artist and i own a small business. I work hard because 
                I want to pursue my course and become successful in the future."</p>
        </div>
        <div class="team-member">
            <input type="file" id="imageUpload2" accept="image/*" />
            <img id="imagePreview2" src="Image2.jpg" alt="Team Member 2">
            <h2>Johnn Vhelle</h2>
            <div class="role-label">Role</div>
            <p class="role">"Group Member"</p>
            <div class="contact-label">Contact</div>
            <p class="contact">johnnvhellebasbas@gmail.com
            </p>
            <div class="bio-label">Bio</div>
            <p class="bio">"Hi there! I'm Vhelle, and I'm a third-year college student at PLMun. 
                I currently take the BSIT program. Watching movies and reading stories are two of my interests, 
                and I'd like to master digital art someday.""
            </p>
        </div>
        <div class="team-member">
            <input type="file" id="imageUpload3" accept="image/*" />
            <img id="imagePreview3" src="Image5.jpeg" alt="Team Member 3">
            <h2>Ian Christoper</h2>
            <div class="role-label">Role</div>
            <p class="role">"Group Leader"</p>
            <div class="contact-label">Contact</div>
            <p class="contact">icasenci12@gmail.com</p>
            <div class="bio-label">Bio</div>
            <p class="bio"> "I'm Ian, a third-year BSIT student at PLMun! Just a guy trying to do better every passing day and hoping
                that life takes me to a simple yet better place." </p>
        </div>
        <div class="team-member">
            <input type="file" id="imageUpload4" accept="image/*" />
            <img id="imagePreview4" src="Image4.jpg" alt="Team Member 4">
            <h2>Justin</h2>
            <div class="role-label">Role</div>
            <p class="role">"Group Member"</p>
            <div class="contact-label">Contact</div>
            <p class="contact">Justinpadora@gmail.com</p>
            <div class="bio-label">Bio</div>
            <p class="bio">"I'm Justin Padora, a third-year BSIT student who also works as a crew leader at a fast food restaurant.
                I'm motivated to work hard in order to achieve my goal of graduating."</p>
        </div>
        <div class="team-member">
            <input type="file" id="imageUpload5" accept="image/*" />
            <img id="imagePreview5" src="Image3.jpg" alt="Team Member 5">
            <h2>Cyraine</h2>
            <div class="role-label">Role</div>
            <p class="role">"Group Member"</p>
            <div class="contact-label">Contact</div>
            <p class="contact">cyrainemae@gmail.com</p>
            <div class="bio-label">Bio</div>
            <p class="bio">"My name is Cyraine Mae Magdaraog, a third-year BSIT student at PLMUN my goal is to 
                graduate and be successful someday"</p>
        </div>
    </div>

    
</body>
</html>
<!-- end of html-->
<?php
$dataFile = 'group7_data.txt';

if (file_exists($dataFile)) {
    $teamArray = file($dataFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
} else {
    $teamData = "Rechelle|image1.png|Group Member|candidorechelleanne@gmail.com|I'm Rechelle Anne Candido, a third-year BSIT student. A working student, nail tech, makeup artist and I own a small business. I work hard because I want to pursue my course and become successful in the future.\n" .
                "Johnn Vhelle|Image2.jpg|Group Member|johnnvhellebasbas@gmail.com|Hi there! I'm Vhelle, and I'm a third-year college student at PLMun. I currently take the BSIT program. Watching movies and reading stories are two of my interests, and I'd like to master digital art someday.\n" .
                "Ian Christoper|Image5.jpeg|Group Leader|icasenci12@gmail.com|I'm Ian, a third-year BSIT student at PLMun! Just a guy trying to do better every passing day and hoping that life takes me to a simple yet better place.\n" .
                "Justin|Image 4.jpg|Group Member|Justinpadora@gmail.com|I'm Justin Padora, a third-year BSIT student who also works as a crew leader at a fast food restaurant. I'm motivated to work hard in order to achieve my goal of graduating.\n" .
                "Cyraine|Image3.jpg|Group Member|cyrainemae@gmail.com|My name is Cyraine Mae Magdaraog, a third-year BSIT student at PLMUN. My goal is to graduate and be successful someday.";

    file_put_contents($dataFile, $teamData);

    $teamArray = file($dataFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 7 Team Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="group-name">BSIT 3L - Group 7</div>
    <p class="group-description">"Integrative Programming"</p>
    <div class="team-members">
        <?php foreach ($teamArray as $index => $memberData): 
            $member = explode('|', $memberData); ?>
        <div class="team-member">
            <input type="file" id="imageUpload<?php echo $index + 1; ?>" accept="image/*" />
            <img id="imagePreview<?php echo $index + 1; ?>" src="<?php echo $member[1]; ?>" alt="Team Member <?php echo $index + 1; ?>">
            <h2><?php echo $member[0]; ?></h2>
            <div class="role-label">Role</div>
            <p class="role"><?php echo $member[2]; ?></p>
            <div class="contact-label">Contact</div>
            <p class="contact"><?php echo $member[3]; ?></p>
            <div class="bio-label">Bio</div>
            <p class="bio"><?php echo $member[4]; ?></p>
        </div>
        <?php endforeach; ?>
    </div>
</body>
</html>