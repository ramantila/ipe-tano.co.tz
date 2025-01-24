<style>
.hero_single.version_3 {
    position: relative;
    height: 620px;
    background: #222 url("../../images/category-slideshow/ipetano_bg.jpg") center center no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    color: white;
    text-align: center;
}

.carousel-indicators {
    position: absolute;
    bottom: 20px;
    left: 35%;
    transform: translateX(-50%);
    display: flex;
    gap: 10px;
    text-align:center;
}

.carousel-indicators .indicator {
    width: 12px;
    height: 12px;
    background-color: rgba(255, 255, 255, 0.5);
    border: none;
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s;
}

.carousel-indicators .indicator.active {
    background-color: #fff;
}
/* Positioning and styling for controls */
.carousel-controls {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
    pointer-events: none; /* Allow buttons only to receive clicks */
}

.carousel-controls button {
    pointer-events: auto; /* Make buttons clickable */
    background-color: rgba(0, 0, 0, 0.2);
    color: white;
    border: none;
    font-size: 24px;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.carousel-controls button:hover {
    background-color: rgba(0, 0, 0, 0.3);
}

</style>