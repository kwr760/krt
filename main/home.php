<html>
<header>
    <script src="js/nav.js"></script>
</header>
<body>
<style>
    .button {
        font: bold 11px Arial;
        text-decoration: none;
        background-color: #EEEEEE;
        color: #333333;
        padding: 2px 6px 2px 6px;
        border-top: 1px solid #CCCCCC;
        border-right: 1px solid #333333;
        border-bottom: 1px solid #333333;
        border-left: 1px solid #CCCCCC;
        margin: 2px;
        display: block;
        width: 75%;
    }
</style>
    <div style="width: 100%; height: 100%">
        <div class="kroy" style="height: 100%;">
            <nav style="background: #333333; width: 10%; height: 100%; float: left">
                <hr style="visibility: hidden;" />
                <a class="button" href="#" onclick="navHome();">Home</a>
                <a class="button" href="#" onclick="navResume();">Resume</a>
                <a class="button" href="#" onclick="navNotes();">Notes</a>
            </nav>
            <article style="width: 90%; height: 100%; float: left">
                <section class="title" style="background: #333333; color: #CCCCCC; padding: 5px;">
                    <big>Kevin Roy</big>
                </section>
                <section class="display">
                    Content
                </section>
            </article>
        </div>
    </div>
</body>
</html>