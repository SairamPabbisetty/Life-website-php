<?php
session_start();

if(isset($_SESSION["mailid"])) {
    $mail_id = $_SESSION["mailid"];
} else {
    $mail_id = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIFE - Home</title>
    <link rel="stylesheet" type="text/css" href="life00.css">
</head>
<body>

    <?php if(isset($mail_id)) { ?>
    <div class="buttons">
        <div class="signup">
            <a href="profile.php">Profile</a>
        </div>
        <div class="login">
            <a href="logout.php">LogOut</a>
        </div>
    </div>
    <?php } else { ?>
    <div class="buttons">
        <div class="login">
            <a href="login.html">LogIn</a>
        </div>
    </div>
    <?php } ?>
    
    <header>
        <h1>LIFE</h1>
        <h3>Live Intensely Fulfill Emotions</h3>
    </header>

    <?php 
        include "navigation.php";
    ?>

    <div class="content">
        
        <div class="para1">
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;First of all, Life refers to an aspect of existence. This aspect processes acts, evaluates, and evolves through growth. Life is what distinguishes humans from inorganic matter. Some individuals certainly enjoy free will in Life. Others like slaves and prisoners don’t have that privilege. However, Life isn’t just about living independently in society. It is certainly much more than that. Hence, quality of Life carries huge importance. Above all, the ultimate purpose should be to live a meaningful life. A meaningful life is one which allows us to connect with our deeper self.</p>
            <p>One important aspect of Life is that it keeps going forward. This means nothing is permanent. Hence, there should be a reason to stay in dejection. A happy occasion will come to pass, just like a sad one. Above all, one must be optimistic no matter how bad things get. This is because nothing will stay forever. Every situation, occasion, and event shall pass. This is certainly a beauty of Life. Many people become very sad because of failures. However, these people certainly fail to see the bright side. The bright side is that there is a reason for every failure. Therefore, every failure teaches us a valuable lesson. This means every failure builds experience. This experience is what improves the skills and efficiency of humans.</p>
            <p>Probably a huge number of individuals complain that Life is a pain. Many people believe that the word pain is a synonym for Life. However, it is pain that makes us stronger. Pain is certainly an excellent way of increasing mental resilience. Above all, pain enriches the mind. The uncertainty of death is what makes life so precious. No one knows the hour of one’s death. This probably is the most important reason to live life to the fullest. Staying in depression or being a workaholic is an utter wastage of Life. One must certainly enjoy the beautiful blessings of Life before death overtakes.</p>
            <p>Most noteworthy, optimism is the ultimate way of enriching life. Optimism increases job performance, self-confidence, creativity, and skills. An optimistic person certainly can overcome huge hurdles.Meditation is another useful way of improving Life quality. Meditation probably allows a person to dwell upon his past. This way one can avoid past mistakes. It also gives peace of mind to an individual. Furthermore, meditation reduces stress and tension.</p>
            <p>Pursuing a hobby is a perfect way to bring meaning to life. Without a passion or interest, an individual’s life would probably be dull. Following a hobby certainly brings new energy to life. It provides new hope to live and experience Life. In conclusion, Life is not something that one should take for granted. It’s certainly a shame to see individuals waste away their lives. We should be very thankful for experiencing our lives. Above all, everyone should try to make their life more meaningful.</p>
        </div>
    
        <div class="box1">
            <div class="para2">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;One of the many fascinating things in this world is the incapability of humans to define the very concept of words themselves and understand their depth in their entirety. A vain though almost triumphant attempt to somehow visualize or articulate our thoughts, to make sense out of our strangest ideas and perceptions, to rid ourselves of those very ideas in the hopes of maybe finding someone who might understand or relate? Maybe because the very essence of feeling lies in words themselves. There is a word for almost every feeling. Being probably the second oldest inherited belongings from our ancestors, first being this planet and the universe, and having traveled all this way to reach us here in a form unaltered, preserved with the same essence and depth as they once possessed, or perhaps even more depth, because of the history they carry and the different times through which they have been through, words have produced a way for us to express what we feel inside the most hidden parts of our beings, if not physically but, through language. </p>
            </div>
            <div class="photos">
                <ul type="none">
                    <li><img src="https://3.bp.blogspot.com/-j4Won5MaPHI/XDnMmER0WrI/AAAAAAAANEg/cADZgOrtw_ovvCBYKN8lY6IGCmMG-NlhACLcBGAs/s1600/Swami%2BVivekananda%2B-%2B2.jpg" alt=""></li>
                    <li><img src="https://1.bp.blogspot.com/-l9h8fmoaROs/XxreId8mr3I/AAAAAAAAD7E/i-l2VXX4AeUYcDuefsmIvI_AI1bDmitEQCLcBGAsYHQ/s1600/Mahatma-Gandhi.jpg" alt=""></li>
                    <li><img src="https://cdn.quotesgram.com/img/24/94/1523469304-o-MOTHER-TERESA-MYTH-facebook.jpg" alt=""></li>
                    <li><img src="https://th.bing.com/th/id/R.3b8355a538d55441c456db524d134877?rik=qgzHplD3RYHocw&riu=http%3a%2f%2f1.bp.blogspot.com%2f-YPI7lQ5Hvm4%2fTaWe7xtgY3I%2fAAAAAAAAAKs%2f-wKlyEEsWDw%2fs1600%2fcss1204.jpg&ehk=i1ddIw%2b19AMqSiZ9S%2fNDAGsaY9gio5u1tJP3aR9G8L0%3d&risl=&pid=ImgRaw&r=0" alt=""></li>
                    <li><img src="https://images.newindianexpress.com/uploads/user/imagelibrary/2017/9/28/original/BhagatSingh21.jpg" alt=""></li>
                </ul>
            </div>
            <div class="words">
                <a href="life01.html"><i> Read The Words . . . .</i></a>
            </div>
        </div>

        <div class="box1">
            <div class="para2">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Music is perhaps the art that presents the most philosophical puzzles. Unlike painting, its works often have multiple instances, none of which can be identified with the work itself. Thus, the question of what exactly the work is is initially more puzzling than the same question about works of painting, which appear (at least initially) to be ordinary physical objects. Unlike much literature, the instances of a work are performances, which offer interpretations of the work, yet the work can also be interpreted (perhaps in a different sense) independently of any performance, and performances themselves can be interpreted. This talk of “interpretation” points to the fact that we find music an art steeped with meaning, and yet, unlike drama, pure instrumental music has no obvious semantic content. This quickly raises the question of why we should find music so valuable. Central to many philosophers’ thinking on these subjects has been music’s apparent ability to express emotions while remaining an abstract art in some sense.</p>
            </div>
            <div class="photos">
                <ul type="none">
                    <li><img src="https://i0.wp.com/www.socialnews.xyz/wp-content/uploads/2019/11/10/Suriya-s-Soorari-Pottru-and-Aakasam-Nee-Haddura-movie-first-look-posters-2.jpg?quality=90&zoom=1&ssl=1" alt=""></li>
                    <li><img src="https://1.bp.blogspot.com/-zPPcueDOy6w/YO8E96SQsSI/AAAAAAAAANY/Js_JvqV7nV4LFzGRWI_4jcQBY1uLOLEEwCNcBGAsYHQ/s1920/Album%2BArt.jpg" alt=""></li>
                    <li><img src="https://www.filmibeat.com/img/190x100x237/popcorn/movie_posters/diksoochi-20190425170221-18270.jpg" alt=""></li>
                    <li><img src="https://moviegalleri.net/wp-content/gallery/7th-sense-movie-posters/7th_sense_posters_0544.jpg" alt=""></li>
                    <li><img src="https://timesofindia.indiatimes.com/photo/48087529/size-29169/48087529.jpg" alt=""></li>
                </ul>
            </div>
            <div class="songs">
                <a href="life01.html"><i> Feel The Songs . . . .</i></a>
            </div>
        </div>

        <div class="box2">
            <div class="writings">
                <h2>Upload Your Writings Here . . . .</h2>
                <a href="life04.html">My Writings</a>
            </div>
            <div class="club">
                <h2>Join Our Life Club . . . .</h2>
                <a href="life05.html">Join The Club</a>
            </div>
        </div>
    </div>

    <footer>
        <div class="block1">
            <div class="block1b">
                <ul type="none">
                    <li>2022 LIFE, Inc</li>
                    <li><img src="https://th.bing.com/th/id/OIP.X-84g0OWqwBNostBdLw8lgHaHa?pid=ImgDet&rs=1" alt=""></li>
                    <li>All Copyrights are Reserved</li>
                    <li><u>Terms and Conditions</u></li>
                </ul>
            </div>
            <div class="block1c">
                <ul type="none">
                    <li><img src="https://th.bing.com/th/id/R.5e04fd779e7607a47d0bad14976caa90?rik=MYieavaZpaXrMw&riu=http%3a%2f%2f1000logos.net%2fwp-content%2fuploads%2f2017%2f02%2fNew-Instagram-logo.jpg&ehk=kTNHOU7RNhSBC8VTl4FPXOmyjXgyJlrNtPiZ9qk03fA%3d&risl=&pid=ImgRaw&r=0" alt=""></li>
                    <li><img src="https://th.bing.com/th/id/OIP.Sbs-M2-y31gNoj9n-IIeowHaHa?pid=ImgDet&rs=1" alt=""></li>
                    <li><img src="https://clipart.info/images/ccovers/1509135366facebook-symbol-png-logo.png" alt=""></li>
                </ul>
            </div>
        </div>
        <div class="block2">
            <div class="block2b">
                <ul type="none">
                    <li><b>Social</b></li>
                    <li>Blog</li>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                </ul>
            </div>
            <div class="block2c">
                <ul type="none">
                    <li><b>Contact</b></li>
                    <li>Email</li>
                    <li>Dm on Instagram</li>
                    <li>Dm on Twitter</li>
                    <li>Dm on Facebook</li>
                </ul>
            </div>
            <div class="block2d">
                <ul type="none">
                    <li>About Us</li>
                    <li>Licenses</li>
                    <li>Reviews</li>
                    <li>FAQ's</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
