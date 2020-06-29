<?php
$realSite = 'Pug Rescue';
$realSiteURL = 'https://www.facebook.com/NewZealandPugRescue/';
$designerName = 'Yana Brewster';

function acknowledgement_styles_custom(){
    ?>
        <style media="screen">
            html,body{
                overflow: hidden;
            }

            #acknowledgeOverlay.overlay{
                width: 100%;
                height: 100%;
                position: fixed;
                top: 0;
                left: 0;
                background-color: rgba(0,0,0,0.5);
                z-index: 10000000;
                display: none;
            }

            #overlayContent{
                position: absolute;
                top: 50%;
                left: 50%;
                background-color:white;
                width:60%;
                min-height:300px;
                color: white;
                transform: translate(-50%,-50%);
                -ms-transform: translate(-50%,-50%);
                color: black;
                text-align: center;
                padding: 16px;
            }

            .overlayBtn{
                display: none;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
                border-radius: 0;
                padding: .375rem .75rem;
                font-size: 1rem;
                line-height: 1.5;
                background-color: #34495e;
                color: white;
                text-transform: none;
            }

        </style>

    <?php
}

function acknowledgement_script_custom(){
    ?>
    <div id="acknowledgeOverlay" class="overlay">
        <div id="overlayContent">
            <h3>Please Acknowledge</h3>
            <hr>
            <p>This site is for education use only and is <strong>not</strong> the real site for <?= $GLOBALS['realSite']; ?>.</p>
            <p>This is created for a school project at Yoobee School of Design by <?= $GLOBALS['designerName']; ?> and has no affiliation with real <?= $GLOBALS['realSite']; ?>.</p>
            <a href="<?= $GLOBALS['realSiteURL']; ?>" target="blank">Click here to see the real site.</a><br>
            <p>Check the button bellow to confirm you understand.</p>
            <div>
                <input type="checkbox" id="acknowledgeCheckBox" onclick="checkedInput();"> <label for="">I understand that this website is not the real <?= $GLOBALS['realSite']; ?> website</label>
            </div>

            <button type="button" name="button" id="acknowledgeSubmit" class="overlayBtn" onClick="confirmAcknowledge();">Submit</button>
        </div>
    </div>
    <script type="text/javascript">
        if(sessionStorage.acknowledged){
            confirmAcknowledge();
        } else {
            document.getElementById("acknowledgeOverlay").style.display = "block";
        }

        function checkedInput(){
            var checkbox = document.getElementById('acknowledgeCheckBox');
            if (checkbox.checked == true){
                document.getElementById('acknowledgeSubmit').style.display = 'inline-block';
            } else {
                document.getElementById('acknowledgeSubmit').style.display = 'none';
            }
        }

        function confirmAcknowledge(){
            var body = document.getElementsByTagName('body')[0].style.overflow = "unset";
            var html = document.getElementsByTagName('html')[0].style.overflow = "unset";
            var elem = document.getElementById("acknowledgeOverlay");
            elem.parentNode.removeChild(elem);
            sessionStorage.setItem("acknowledged", true);
        }
    </script>
    <?php
}

if( ! is_admin() ){
    add_action('wp_head', 'acknowledgement_styles_custom');
    add_action('wp_footer', 'acknowledgement_script_custom');
}
