<style type="text/css">
    .card_text
            {
                position: relative;
                width: 1000px;
                display: flex;
                justify-content: space-between
                /*flex-wrap: wrap;*/
                margin: 20px;
            }
            .card_text .card
            {
                position: relative;
                height: 250px;
                background: #fff;
                display: flex;
                width: 35%;
                margin: 30px 0;
                margin-left: 3px;
            }
            .card_text .card .imgBx
            {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: #333;
                z-index: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                transition: 0.5s ease-in-out;
            }
            .card_text .card:hover .imgBx
            {
                width: 150px;
                height: 150px;
                left: -75px;
                top: calc(50% - 75px);
                transition: 0.5s ease-in-out;
                background: #ff0057;

            }
            .card_text .card .imgBx:before
            {
               content: attr(data-text);
               position: absolute;
               bottom: 0;
               left: 0;
               width: 100%;
               height: 100%;
               text-align: center;
               font-size: 6em;
               color: rgba(255,255,255,0.5);
               font-weight: 700;
            }
            .card_text .card .imgBx img
            {
                max-width: 200px;
                transition: 0.5s ease-in-out;

            }
            .card_text .card:hover .imgBx img
            {
                max-width: 75px;

            }
            .card_text .card .content
            {
                position: absolute;
                right: 0;
                width: calc(100% - 75px);
                height: 100%;
                padding: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .card_text .card .content h3
            {
                margin-bottom: 5px;
                font-size: 24px;
            }
            @media(max-width: 992px)
            {
                .card_text
                {
                    width: 100%;
                    flex-direction: column;
                    align-items: center;
                }
                .card_text .card
                {
                    width: 400px;

                }
            }
            @media(max-width: 768px)
            {
                .card_text .card
                {
                    max-width: 300px;
                    flex-direction: column;
                    height: auto;
                }
                .card_text .card .imgBx
                {
                    position: relative;
                }
                .card_text .card .imgBx,
                .card_text .card:hover .imgBx 
                {
                   width: 100%;
                   height: 200px;
                   left: 0;
                }
                .card_text .card .imgBx img,
                .card_text .card:hover .imgBx img
                {
                    max-width: 100px;
                }
                .card_text .card .content
                {
                    position: relative;
                    width: 100%;
                }

            }

</style>
<!-- start -->
<section>
    <div class="container-fluid">
        <div class="main_driver_partner">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="tittal_div_stule" style="margin-bottom: 60px;">
                    <h1 style=" font-family: 'Montserrat', sans-serif;">Make Money. Earn Respect. Secure Your Future.</h1>
                    <p style=" font-family: 'Montserrat', sans-serif;">Apply now to become an GoAid driver-partner. Start earning in 24 hours!</p>
                </div>
                <div class="container-fluid card_text">
                    <div class="card">
                        <div class="imgBx" data-text="">
                            <img src="images/p1.png">
                        </div>
                        <div class="content">
                            <div>
                                <h3 style=" font-family: 'Montserrat', sans-serif;">Someone's Life is Waiting</h3>
                                <p style=" font-family: 'Montserrat', sans-serif;">We believe that if you are here then you understand the value of someone’s life. Here we have a community completely passionate to serve their time to save others lives, just like you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imgBx" data-text="">
                            <img src="images/p2.png">
                        </div>
                        <div class="content">
                            <div>
                                <h3 style=" font-family: 'Montserrat', sans-serif;">
                                Drive when you want
                                </h3>
                                <p style=" font-family: 'Montserrat', sans-serif;">
                                    Need something other than 9 to 5? As an independent contractor with Goaid, you’ve got freedom and flexibility to drive whenever you have time. Set your own schedule, so you can be there for all of life’s most important moments.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="imgBx" data-text="">
                            <img src="images/p3.png">
                        </div>
                        <div class="content">
                            <div>
                                <h3 style=" font-family: 'Montserrat', sans-serif;">
                                No office
                                </h3>
                                <p style=" font-family: 'Montserrat', sans-serif;">
                                Whether you’re supporting your family or saving for something big, Goaid gives you the freedom to get behind the wheel when it makes sense for you. Choose when you drive, where you go, and who you pick up.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->