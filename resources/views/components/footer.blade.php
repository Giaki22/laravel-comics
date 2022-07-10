<div class="upper-footer">
    <div class="content" style="display:flex">
        <div class="lists">
            <ul>
                <h5>dc comics</h5>
                <li>character</li>
                <li>comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>videos</li>
                <li>news</li>
            </ul>
            <ul>
                <h5>shop</h5>
                <li>shop DC</li>
                <li>shop DC collectibles</li>
            </ul>
            <ul>
                <h5>dc</h5>
                <li>therms of use</li>
                <li>privacy policy (new)</li>
                <li>ad choices</li>
                <li>advertising</li>
                <li>job</li>
                <li>subscriptions</li>
                <li>talent workshops</li>
                <li>CPSC certicates</li>
                <li>ratings</li>
                <li>shop help</li>
                <li>contact us</li>
            </ul>
            <ul>
                <h5>sites</h5>
                <li>DC</li>
                <li>MAD magazine</li>
                <li>DC kids</li>
                <li>DC universe</li>
                <li>DC power visa</li>
            </ul>
        </div>
        <div class="big-logo">
            <img src="images/dc-logo-bg.png" alt="">
        </div>
    </div>
</div>
<div class="bottom-footer">
    <div class="content bottom-footer">
        <button class="signup">Sign-up now!</button>
        <ul>
            <h5>Follow us</h5>
            <li><img src="images/footer-facebook.png" alt=""></li>
            <li><img src="images/footer-twitter.png" alt=""></li>
            <li><img src="images/footer-youtube.png" alt=""></li>
            <li><img src="images/footer-pinterest.png" alt=""></li>
            <li><img src="images/footer-periscope.png" alt=""></li>
        </ul>
    </div>
</div>

<style>
.upper-footer{
    background-image: url('images/footer-bg.jpg');    
    background-repeat: no-repeat;
    background-size: cover;
}
.lists{
    display: flex;
    flex-flow: column wrap;
    width: 50%;
    padding: var(--m);
    max-height: 25rem;
    gap: var(--s);
}
.lists h5{
    color: var(--primary-text-color);
    text-transform: uppercase;
    margin-bottom: .625rem;
}
.big-logo{
    width: 50%;
    position: relative;
    overflow: hidden;
}
.big-logo img{
    width: 100%;
    position: absolute;
    left: 0;
    top: -15%;
}
.lists ul{
    text-transform: capitalize;
    color: var(--primary-text-color);
    display: flex;
    flex-flow: column wrap;
    list-style: none;
    font-size: .9375rem;
    font-weight: 300;
}
.lists ul li, .bottom-footer ul li{
    color: rgba(255, 255, 255, 0.5);
    font-size: var(--xs);
    margin: .1875rem 0rem;
}
.lists ul li:hover, .bottom-footer ul li:hover{
    cursor: pointer;
    color: var(--accent-text-color);
}
.bottom-footer{
    background-color: var(--secondary-color);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0px;
}
.signup{
    padding: 10px 5px;
    border: 2px solid var(--primary-color);
    background-color: transparent;
    color: var(--primary-text-color);
    text-transform: uppercase;
}
.bottom-footer ul{
    align-items: center;
    text-decoration: none;
    display: flex;
    gap: 10px;
}
.bottom-footer ul h5{
    color: var(--accent-text-color);
    text-transform: uppercase;
}
.bottom-footer ul li{
    list-style: none;
}
.bottom-footer ul li img{
    width: 70%;
}
</style>

{{-- Lists gently offered by Alan "github.com/Hirisci" --}}