/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId)

  toggle.addEventListener('click', () => {
    // Add show-menu class to nav menu
    nav.classList.toggle('show-menu')
    // Add show-icon to show and hide menu icon
    toggle.classList.toggle('show-icon')
  })
}

showMenu('nav-toggle', 'nav-menu')
// =======================
// hero banner scrollable image 
// Select elements
const slidesList = document.querySelectorAll(".image-slide");
const track = document.querySelector(".image-slider-track");
const btnPrev = document.querySelector(".btn-slide-prev");
const btnNext = document.querySelector(".btn-slide-next");
const pipsWrapper = document.querySelector(".slider-pips");

let currentSlide = 0;
let autoPlayInterval;

// Create dot indicators (pips)
slidesList.forEach((_, index) => {
  const pip = document.createElement("span");
  pip.classList.add("slider-pip");
  if (index === 0) pip.classList.add("active");
  pip.addEventListener("click", () => goToSlide(index));
  pipsWrapper.appendChild(pip);
});
const pips = document.querySelectorAll(".slider-pip");

function updateSliderPosition() {
  track.style.transform = `translateX(-${currentSlide * 100}%)`;
  pips.forEach((p) => p.classList.remove("active"));
  pips[currentSlide].classList.add("active");
}

function goToSlide(idx) {
  currentSlide = idx;
  updateSliderPosition();
  resetAutoPlay();
}

function previousSlide() {
  currentSlide = (currentSlide - 1 + slidesList.length) % slidesList.length;
  updateSliderPosition();
  resetAutoPlay();
}
function nextSlide() {
  currentSlide = (currentSlide + 1) % slidesList.length;
  updateSliderPosition();
  resetAutoPlay();
}

// btnPrev.addEventListener("click", previousSlide);
// btnNext.addEventListener("click", nextSlide);

function startAutoPlay() {
  autoPlayInterval = setInterval(nextSlide, 3500);
}
function resetAutoPlay() {
  clearInterval(autoPlayInterval);
  startAutoPlay();
}
startAutoPlay();

// Optional: Pause autoplay on mouse enter and resume on mouse leave
// track.addEventListener("mouseenter", () => clearInterval(autoPlayInterval));
// track.addEventListener("mouseleave", startAutoPlay);

window.addEventListener("resize", updateSliderPosition);
/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll('.dropdown_item')

// 1. Select each dropdown item
dropdownItems.forEach((item) => {
  const dropdownButton = item.querySelector('.dropdown_button')

  // 2. Select each button click
  dropdownButton.addEventListener('click', () => {
    // 7. Select the current show-dropdown class
    const showDropdown = document.querySelector('.show-dropdown')

    // 5. Call the toggleItem function
    toggleItem(item)

    // 8. Remove the show-dropdown class from other items
    if (showDropdown && showDropdown !== item) {
      toggleItem(showDropdown)
    }
  })
})

// 3. Create a function to display the dropdown
const toggleItem = (item) => {
  // 3.1. Select each dropdown content
  const dropdownContainer = item.querySelector('.dropdown_container')

  // 6. If the same item contains the show-dropdown class, remove
  if (item.classList.contains('show-dropdown')) {
    dropdownContainer.removeAttribute('style')
    item.classList.remove('show-dropdown')
  } else {
    // 4. Add the maximum height to the dropdown content and add the show-dropdown class
    dropdownContainer.style.height = dropdownContainer.scrollHeight + 'px'
    item.classList.add('show-dropdown')
  }
}

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia('(min-width: 1118px)'),
  dropdownContainer = document.querySelectorAll('.dropdown_container')

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () => {
  // Validate if the media query reaches 1118px
  if (mediaQuery.matches) {
    // Remove the dropdown container height style
    dropdownContainer.forEach((e) => {
      e.removeAttribute('style')
    })

    // Remove the show-dropdown class from dropdown item
    dropdownItems.forEach((e) => {
      e.classList.remove('show-dropdown')
    })
  }
}

addEventListener('resize', removeStyle)


// FAQ toggle
function toggleFaq(faqItem) {
  const question = faqItem.querySelector('.faq-question');
  const answer = faqItem.querySelector('.faq-answer');
  question.classList.toggle('active');
  answer.classList.toggle('expanded');
}
// Tabs
function openTab(evt, tabId) {
  const tabContents = document.querySelectorAll('.tab-content');
  const tabButtons = document.querySelectorAll('.tab-btn');
  tabContents.forEach(content => content.classList.remove('active'));
  tabButtons.forEach(btn => btn.classList.remove('active'));
  document.getElementById(tabId).classList.add('active');
  evt.currentTarget.classList.add('active');
}

//toggle buttons
function toggleProfile() {
  console.log("Profile clicked");
}

function toggleMenu() {
  console.log("Products clicked");
}

function setActive(el) {
  // Remove active from all
  const all = document.querySelectorAll('#navItems a, #navItems span');
  all.forEach(item => item.classList.remove('active'));

  // Add active to clicked
  el.classList.add('active');
}

// product section image switch 
// Thumbnail image switcher
function changeImg(element) {
  document.querySelector('.thumb-img.active-thumb').classList.remove('active-thumb');
  element.classList.add('active-thumb');
  document.getElementById('mainImg').src = element.src;
}

// solo product review section 
// FAQ accordion toggle
document.querySelectorAll('.faq-question').forEach(question => {
  question.addEventListener('click', () => {
    const answer = question.nextElementSibling;

    const isOpen = answer.classList.contains('open');
    if (isOpen) {
      answer.classList.remove('open');
      question.setAttribute('aria-expanded', 'false');
    } else {
      // Close other open answers (optional)
      document.querySelectorAll('.faq-answer.open').forEach(openAnswer => {
        openAnswer.previousElementSibling.setAttribute('aria-expanded', 'false');
        openAnswer.classList.remove('open');
      });
      answer.classList.add('open');
      question.setAttribute('aria-expanded', 'true');
    }
  });

  // Keyboard accessibility (Enter & Space toggles)
  question.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      e.target.click();
    }
  });
});

//   end

// ================================== chatbot start 
 // Elements
    const chatContainer = document.getElementById('chatbotContainer');
    const chatToggleBtn = document.getElementById('chatToggleBtn');
    const closeBtn = document.getElementById('closeBtn');
    const chatBody = document.getElementById("chatBody");
    const chatForm = document.getElementById("chatForm");
    const userInput = document.getElementById("userInput");

    // Show chat on clicking toggle
    chatToggleBtn.addEventListener('click', () => {
      chatContainer.classList.add('open');
      chatToggleBtn.classList.add('hide');
      setTimeout(() => userInput.focus(), 100);
    });


    function isDesktop() {
  return window.innerWidth > 540;
}
    // Hide chat and show toggle button again
    closeBtn.addEventListener('click', () => {
      chatContainer.classList.remove('open');
      chatToggleBtn.classList.remove('hide');
    });

    // Simple demo bot reply
    function botReply(input) {
      input = input.toLowerCase();
      if (input.includes('hello') || input.includes('hi')) {
        return "Hello! 👋 How can I assist you today?";
      } else if (input.includes('help')) {
        return "Sure! Please describe how I can help you.";
      } else if (input.includes('thank')) {
        return "You're welcome! 😊";
      } else if (input.includes('bye')) {
        return "Goodbye! Have a great day!";
      } else {
        return "I'm a still learning. If you want further information call at +918882668343 🤖";
      }
    }

    function addMessage(text, sender) {
      const msg = document.createElement("div");
      msg.className = "message " + (sender === "user" ? "user-message" : "bot-message");
      msg.textContent = text;
      chatBody.appendChild(msg);
      chatBody.scrollTop = chatBody.scrollHeight;
    }

    chatForm.addEventListener('submit', function(e) {
      e.preventDefault();
      const input = userInput.value.trim();
      if (!input) return;
      addMessage(input, "user");
      userInput.value = '';
      setTimeout(() => {
        const reply = botReply(input);
        addMessage(reply, "bot");
      }, 700);
    });

    // When chat opens for first time, show welcome
    let isInitiated = false;
    chatToggleBtn.addEventListener('click', () => {
      if (!isInitiated) {
        addMessage("Hello! I'm your virtual assistant. How can I help you?", "bot");
        isInitiated = true;
      }
    });

    // Optional: Press Escape to close the chat
    window.addEventListener('keydown', (e) => {
      if(e.key === "Escape" && chatContainer.classList.contains('open')) {
        chatContainer.classList.remove('open');
        chatToggleBtn.classList.remove('hide');
      }
    });
    chatBody.addEventListener('scroll', function() {
  if (
    isDesktop() &&
    chatBody.scrollTop + chatBody.clientHeight >= chatBody.scrollHeight - 1 &&
    !chatContainer.classList.contains('slide-down')
  ) {
    chatContainer.classList.add('slide-down');
    chatToggleBtn.classList.remove('hide');
    setTimeout(() => {
      chatContainer.classList.remove('open');
      chatContainer.classList.remove('slide-down');
    }, 400); // match transition duration for clean reset
  }
});
chatBody.addEventListener('scroll', function() {
  if (
    isDesktop() &&
    chatBody.scrollTop + chatBody.clientHeight >= chatBody.scrollHeight - 1
  ) {
    chatContainer.classList.remove('open');
    chatToggleBtn.classList.remove('hide');
  }
});
// chatbot end 