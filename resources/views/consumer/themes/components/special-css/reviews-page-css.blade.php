<style>
a.btn_2, .btn_2 {
    border: none;
    color: #fff;
    background: rgb(178, 137, 16);
    outline: none;
    cursor: pointer;
    display: inline-block;
    text-decoration: none;
    padding: 10px 45px;
    color: #fff;
    font-weight: 600;
    text-align: center;
    line-height: 1;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    border-radius: 3px;
    font-size: 14px;
    font-size: 0.875rem;
}
#preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: rgba(0, 0, 0, 0.5);  /* Optional: background overlay */
    z-index: 9999;
}

.spinner {
    border: 4px solid #B28910;  /* Light gray border */
    border-top: 4px solid #fff;  /* White top border to create spinning effect */
    border-radius: 50%;
    width: 40px;
    height: 40px;
    animation: spin 1s linear infinite;  /* Spin animation */
}

/* Keyframe for spinning animation */
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
.card300{
    border-radius:10px 10px!important;
}


.card-slider {
  width: 60%;
  margin: 20px auto;
  overflow: hidden;
}

.cards-wrapper {
  display: flex;
  transition: transform 1s ease-in-out;
}

.card {
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  flex: 0 0 45%; 
  padding: 10px;
  margin:5px;
}

.card img {
    margin-right:10px;
  border-radius: 5px;
}

.card h5 {
  margin-top: 10px;
  font-size: 1.25rem;
  color: #333;
}

.card p {
  font-size: 1rem;
  color: #666;
  margin-top: 10px;
}



/* On hover */
.list-group-item:hover {
  background-color: #B28910;  
  color: #fff!important;   
}
.item300.lik20:hover{
    color:#fff!important;
}

.company-card {
    display: flex;
    align-items: center;
    background: #fff;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 10px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.company-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
}

.company-logo {
    width: 50px;
    
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
        flex-direction:row;
        align-items: flex-start;
        text-align: left;
    }

    .company-logo {
        margin-bottom: 10px;
    }

    .card-slider {
  width: 23em!important;
  margin: 20px auto;
  overflow: hidden;

}
.card300{
    width:22em!important;
  
}
.cont1{
    display:none;
}
.search_mob{
    display:none!important;
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
.h1foryou{
    position:relative;
    top:1.5em;
}

</style>
