//IT22196460
//U.U.M.Hewage

window.addEventListener('DOMContentLoaded', (event) => {
    // Profile details
    const profileData = {
      id: 1,
      image: '../New folder/Default_Profile_Picture_2.png',
      first_name: '<?php echo $first_name; ?>',
      last_name: '<?php echo $last_name; ?>',
      email:'<?php echo $email; ?>',
      website: 'https://example.com'
    };
  
    // Update profile information
    document.getElementById('full-name').textContent = `${profileData.first_name} ${profileData.last_name}`;
    document.getElementById('email').textContent = profileData.email;
    document.getElementById('profile-img').src = profileData.image;
    document.getElementById('website-link').href = profileData.website;
  
    // Slideshow
    const slides = document.querySelectorAll('.slide');
    let currentSlide = 0;
  
    function showSlide() {
      for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
      }
      slides[currentSlide].style.display = 'block';
    }
  
    function nextSlide() {
      currentSlide = (currentSlide + 1) % slides.length;
      showSlide();
    }
  
    // Show the first slide
    showSlide();
  
    // Change slide every 3 seconds
    setInterval(nextSlide, 3000);
  });
  