<div class="upper-line">
    <div class="content intestation">
        <span class="visa">Dc Power Vista</span>
        <span class="additional">Additional Dc Sites</span>
    </div>
</div>
<div class="main-header">
    <div class="content logo-nav">
        <div class="logo">
            <img src="images/dc-logo.png" alt="">
        </div>
        <nav>
            <ul>
                <li>Characters</li>
                <li class="active">Comics</li>
                <li>Movies</li>
                <li>Tv</li>
                <li>Games</li>
                <li>Collectibles</li>
                <li>Videos</li>
                <li>Fans</li>
                <li>News</li>
                <li>Shop</li>
            </ul>
        </nav>
        <div class="search-bar"></div>
    </div>
</div>
<div class="jumbo"></div>

<style>
    .upper-line{
    background-color: var(--primary-color);
    height: 3vh;
    }
    .intestation{
        display: flex;
        justify-content: flex-end;
        gap: 30px;
        color: var(--primary-text-color);
        text-transform: uppercase;
        font-size: 13px;
        height: 100%;
        align-items: center;
    }
    .logo-nav{
        display: flex;
        justify-content: space-between;
        padding: 10px 0px;
    }
    .logo img{
        height: 70px;
    }
    nav{
        display: flex;
        align-items: center;
    }
    nav ul{
        display: flex;
        list-style: none;
        gap: 20px;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 12px;
        color: var(--secondary-text-color);
        align-items: center;
    }
    nav ul li{
        border-bottom: 2px solid transparent;
    }
    .active, li:hover{
        border-color: var(--primary-color);
        cursor: pointer;
    }
    .jumbo{
        background-image: url('images/jumbotron.jpg');
        height: 30vh;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>