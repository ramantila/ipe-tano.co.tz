<style>

.company-card {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.company-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.company-logo {
    width: 50px;
    height: 50px;
    border-radius: 5px;
    margin-right: 15px;
}

.company-name {
    font-size: 1.2rem;
    font-weight: 600;
    color: #333;
}

@media (max-width: 768px) {
    .company-card {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }

    .company-logo {
        margin-bottom: 10px;
    }
    a.btn_search_mobile{
        display:none!important;
    }
    .card300{
        width:22em!important;
        margin-left:0.3em;
    }
    .categories-title{
        margin-top:0em!important;
        margin-left:1em;
    }
}


@media (max-width: 390px) {
    .company-card {
        flex-direction: column;
        align-items: flex-start;
        text-align: left;
    }

    .company-logo {
        margin-bottom: 10px;
    }
    a.btn_search_mobile{
        display:none!important;
    }
    .card300{
        width:24em!important;
        margin-left:0.3em;
    }
    .categories-title{
        margin-top:0em!important;
        margin-left:1em;
    }
}


.company-container {
    text-align:center;
    padding: 12px 4px;
    margin-bottom: 18px;
}

.company-title {
    font-size: 1.3rem;
    font-weight: 600;
    color: #2a2a2a;
}

.logos-container {
    
    gap: 15px;  /* Space between logos */
}


.logo-image {
    vertical-align: middle;
    width: 20px;
    height: auto;
}
.btn2{
    border-radius:30px!important;
    padding:1em!important;
}
.btn_2{
    background-color:#fff;
     border-radius:30px!important;
    padding:0.6em!important;
    border:1px solid #B28910 ;
    color: #B28910;
}
.btn_2:hover{
    background-color:#B28910 ;
    border-radius:30px!important;
    padding:0.6em!important;
    
    color: #fff;
}
.company-title{
    text-align:left;
}
</style>