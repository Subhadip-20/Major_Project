/* menu bar */
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');

menu.addEventListener('click', () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('nav-toggle');
});

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('nav-toggle');
}


/* login button */
document.getElementById("loginButton").addEventListener("click", function() {
    document.getElementById("loginPopupContainer").style.display = "block";
});

document.getElementById("closePopup").addEventListener("click", function() {
    document.getElementById("loginPopupContainer").style.display = "none";
});

document.getElementById("customerLoginButton").addEventListener("click", function() { /* Add functionality for customer login button */ });

document.getElementById("providerLoginButton").addEventListener("click", function() { /* Add functionality for provider login button */ });




/* contact form */
document.addEventListener("DOMContentLoaded", function() {
  const contactForm = document.getElementById("contact-form");

  function handleFormSubmit(event) {
    event.preventDefault();
    alert("Form submitted!");
    contactForm.reset();
  }
  
  contactForm.addEventListener("submit", handleFormSubmit);
});



// JavaScript for opening and closing feature popups
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the feature popups
    const feature1Popup = document.getElementById("feature1-popup");
    const feature2Popup = document.getElementById("feature2-popup");
    const feature3Popup = document.getElementById("feature3-popup");
    const feature4Popup = document.getElementById("feature4-popup");

    // Get references to the "Read More" buttons
    const feature1Button = document.getElementById("feature1");
    const feature2Button = document.getElementById("feature2");
    const feature3Button = document.getElementById("feature3");
    const feature4Button = document.getElementById("feature4");

    // Get references to the close buttons
    const feature1CloseButton = document.querySelector("#feature1-popup .feature-popup-close");
    const feature2CloseButton = document.querySelector("#feature2-popup .feature-popup-close");
    const feature3CloseButton = document.querySelector("#feature3-popup .feature-popup-close");
    const feature4CloseButton = document.querySelector("#feature4-popup .feature-popup-close");

    // Function to open a feature popup
    function openFeaturePopup(popup) {
        popup.style.display = "block";
    }

    // Function to close a feature popup
    function closeFeaturePopup(popup) {
        popup.style.display = "none";
    }

    // Event listeners for opening feature popups
    feature1Button.addEventListener("click", function () {
        openFeaturePopup(feature1Popup);
    });

    feature2Button.addEventListener("click", function () {
        openFeaturePopup(feature2Popup);
    });

    feature3Button.addEventListener("click", function () {
        openFeaturePopup(feature3Popup);
    });

    feature4Button.addEventListener("click", function () {
        openFeaturePopup(feature4Popup);
    });

    // Event listeners for closing feature popups
    feature1CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature1Popup);
    });

    feature2CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature2Popup);
    });

    feature3CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature3Popup);
    });

    feature4CloseButton.addEventListener("click", function () {
        closeFeaturePopup(feature4Popup);
    });
});

// JavaScript for opening and closing feature popups
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the service popups
    const service1Popup = document.getElementById("service1-popup");
    const service2Popup = document.getElementById("service2-popup");
    const service3Popup = document.getElementById("service3-popup");
    const service4Popup = document.getElementById("service4-popup");
    const service5Popup = document.getElementById("service5-popup");
    // const service6Popup = document.getElementById("service6-popup");
    // const service7Popup = document.getElementById("service7-popup");
    // const service8Popup = document.getElementById("service8-popup");
    // const service9Popup = document.getElementById("service9-popup");


    // Get references to the "Read More" buttons for services
    const service1Button = document.getElementById("service1");
    const service2Button = document.getElementById("service2");
    const service3Button = document.getElementById("service3");
    const service4Button = document.getElementById("service4");
    const service5Button = document.getElementById("service5");
    // const service6Button = document.getElementById("service6");
    // const service7Button = document.getElementById("service7");
    // const service8Button = document.getElementById("service8");
    // const service9Button = document.getElementById("service9");

    // Get references to the close buttons for services
    const service1CloseButton = document.querySelector("#service1-popup .close");
    const service2CloseButton = document.querySelector("#service2-popup .close");
    const service3CloseButton = document.querySelector("#service3-popup .close");
    const service4CloseButton = document.querySelector("#service4-popup .close");
    const service5CloseButton = document.querySelector("#service5-popup .close");
    // const service6CloseButton = document.querySelector("#service6-popup .close");
    // const service7CloseButton = document.querySelector("#service7-popup .close");
    // const service8CloseButton = document.querySelector("#service8-popup .close");
    // const service9CloseButton = document.querySelector("#service9-popup .close");

    // Function to open a service popup
    function openServicePopup(popup) {
        popup.style.display = "block";
    }

    // Function to close a service popup
    function closeServicePopup(popup) {
        popup.style.display = "none";
    }

    // Event listeners for opening service popups
    service1Button.addEventListener("click", function () {
        openServicePopup(service1Popup);
    });

    service2Button.addEventListener("click", function () {
        openServicePopup(service2Popup);
    });

    service3Button.addEventListener("click", function () {
        openServicePopup(service3Popup);
    });

    service4Button.addEventListener("click", function () {
        openServicePopup(service4Popup);
    });
    
    service5Button.addEventListener("click", function () {
        openServicePopup(service5Popup);
    });

    // service6Button.addEventListener("click", function () {
    //     openServicePopup(service6Popup);
    // });

    // service7Button.addEventListener("click", function () {
    //     openServicePopup(service7Popup);
    // });

    // service8Button.addEventListener("click", function () {
    //     openServicePopup(service8Popup);
    // });

    // service9Button.addEventListener("click", function () {
    //     openServicePopup(service9Popup);
    // });

    // Event listeners for closing service popups
    service1CloseButton.addEventListener("click", function () {
        closeServicePopup(service1Popup);
    });

    service2CloseButton.addEventListener("click", function () {
        closeServicePopup(service2Popup);
    });
    
    service3CloseButton.addEventListener("click", function () {
        closeServicePopup(service3Popup);
    });

    service4CloseButton.addEventListener("click", function () {
        closeServicePopup(service4Popup);
    });

    service5CloseButton.addEventListener("click", function () {
        closeServicePopup(service5Popup);
    });

    // service6CloseButton.addEventListener("click", function () {
    //     closeServicePopup(service6Popup);
    // });

    // service7CloseButton.addEventListener("click", function () {
    //     closeServicePopup(service7Popup);
    // });

    // service8CloseButton.addEventListener("click", function () {
    //     closeServicePopup(service8Popup);
    // });

    // service9CloseButton.addEventListener("click", function () {
    //     closeServicePopup(service9Popup);
    // });
});
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the service popups
    const sservice1Popup = document.getElementById("sservice1-popup");
    const sservice2Popup = document.getElementById("sservice2-popup");
    const sservice3Popup = document.getElementById("sservice3-popup");
    const sservice4Popup = document.getElementById("sservice4-popup");
    const sservice5Popup = document.getElementById("sservice5-popup");
    const sservice6Popup = document.getElementById("sservice6-popup");
    const sservice7Popup = document.getElementById("sservice7-popup");
    const sservice8Popup = document.getElementById("sservice8-popup");
    const sservice9Popup = document.getElementById("sservice9-popup");
    const sservice10Popup = document.getElementById("sservice10-popup");
    const sservice11Popup = document.getElementById("sservice11-popup");
    const sservice12Popup = document.getElementById("sservice12-popup");



    // Get references to the "Read More" buttons for services
    const sservice1Button = document.getElementById("sservice1");
    const sservice2Button = document.getElementById("sservice2");
    const sservice3Button = document.getElementById("sservice3");
    const sservice4Button = document.getElementById("sservice4");
    const sservice5Button = document.getElementById("sservice5");
    const sservice6Button = document.getElementById("sservice6");
    const sservice7Button = document.getElementById("sservice7");
    const sservice8Button = document.getElementById("sservice8");
    const sservice9Button = document.getElementById("sservice9");
    const sservice10Button = document.getElementById("sservice10");
    const sservice11Button = document.getElementById("sservice11");
    const sservice12Button = document.getElementById("sservice12");

    // Get references to the close buttons for services
    const sservice1CloseButton = document.querySelector("#sservice1-popup .close");
    const sservice2CloseButton = document.querySelector("#sservice2-popup .close");
    const sservice3CloseButton = document.querySelector("#sservice3-popup .close");
    const sservice4CloseButton = document.querySelector("#sservice4-popup .close");
    const sservice5CloseButton = document.querySelector("#sservice5-popup .close");
    const sservice6CloseButton = document.querySelector("#sservice6-popup .close");
    const sservice7CloseButton = document.querySelector("#sservice7-popup .close");
    const sservice8CloseButton = document.querySelector("#sservice8-popup .close");
    const sservice9CloseButton = document.querySelector("#sservice9-popup .close");
    const sservice10CloseButton = document.querySelector("#sservice10-popup .close");
    const sservice11CloseButton = document.querySelector("#sservice11-popup .close");
    const sservice12CloseButton = document.querySelector("#sservice12-popup .close");

    // Function to open a service popup
    function openServicePopup(popup) {
        popup.style.display = "block";
    }

    // Function to close a service popup
    function closeServicePopup(popup) {
        popup.style.display = "none";
    }

    // Event listeners for opening service popups
    sservice1Button.addEventListener("click", function () {
        openServicePopup(sservice1Popup);
    });

    sservice2Button.addEventListener("click", function () {
        openServicePopup(sservice2Popup);
    });

    sservice3Button.addEventListener("click", function () {
        openServicePopup(sservice3Popup);
    });

    sservice4Button.addEventListener("click", function () {
        openServicePopup(sservice4Popup);
    });
    
    sservice5Button.addEventListener("click", function () {
        openServicePopup(sservice5Popup);
    });

    sservice6Button.addEventListener("click", function () {
        openServicePopup(sservice6Popup);
    });

    sservice7Button.addEventListener("click", function () {
        openServicePopup(sservice7Popup);
    });

    sservice8Button.addEventListener("click", function () {
        openServicePopup(sservice8Popup);
    });

    sservice9Button.addEventListener("click", function () {
        openServicePopup(sservice9Popup);
    });

    sservice10Button.addEventListener("click", function () {
        openServicePopup(sservice10Popup);
    });

    sservice11Button.addEventListener("click", function () {
        openServicePopup(sservice11Popup);
    });

    sservice12Button.addEventListener("click", function () {
        openServicePopup(sservice12Popup);
    });


    // Event listeners for closing service popups
    sservice1CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice1Popup);
    });

    sservice2CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice2Popup);
    });
    
    sservice3CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice3Popup);
    });

    sservice4CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice4Popup);
    });

    sservice5CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice5Popup);
    });

    sservice6CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice6Popup);
    });

    sservice7CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice7Popup);
    });

    sservice8CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice8Popup);
    });

    sservice9CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice9Popup);
    });

    sservice10CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice10Popup);
    });

    sservice11CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice11Popup);
    });
    
    sservice12CloseButton.addEventListener("click", function () {
        closeServicePopup(sservice12Popup);
    });
});
