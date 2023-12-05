window.onload = function () {
  const images = document.querySelectorAll(".gallery-item img");
  let imgSrc;

  // get images src onclick
  images.forEach((img) => {
    if (img != null) {
      img.addEventListener("click", (e) => {
        imgSrc = e.target.src;
        console.log(imgSrc);
        imgModal(imgSrc);
      });
    }
  });

  //creating the modal
  let imgModal = (src) => {
    const modal = document.createElement("div");
    modal.setAttribute("class", "modal");
    //add the modal to the main section or the parent element
    document.querySelector(".album").append(modal);
    //adding image to modal
    const newImage = document.createElement("img");
    newImage.setAttribute("src", src);
    modal.append(newImage);
    //creating the close button
    const closeBtn = document.createElement("i");
    closeBtn.setAttribute("class", "fas fa-times closeBtn");
    //close function
    closeBtn.onclick = () => {
      modal.remove();
    };
    modal.append(newImage, closeBtn);
  };

  document.querySelector("#header").addEventListener("click", function () {
    window.location.href = "index.php";
  });

  let wordArr1 = [
    "Synth",
    "Scrim",
    "Machine",
    "Neural",
    "Quantum",
    "Autonomous",
    "Drone",
    "Augmented",
    "Virtual",
    "Data",
    "Analytic",
    "Cognitive",
    "Synthetica",
    "Swarm",
    "Dream",
    "Cyber",
    "Bio",
  ];

  let wordArr2 = [
    "Shaw",
    "Brain",
    "Bot",
    "Cyborg",
    "Machine",
    "Soft",
    "Cloud",
    "Synthetica",
    "Replicated",
    "Generated",
    "Sentience",
    "Conscious",
    "Bio",
    "Meta",
    "Punk",
    "Flesh",
    "Metal",
  ];

  let rand1 = Math.floor(Math.random() * 17);
  let rand2 = Math.floor(Math.random() * 17);

  let word1 = wordArr1[rand1];
  let word2 = wordArr2[rand2];

  let headerTxt = word1.concat(word2);

  let header = document.querySelector("#header");

  function textTypingEffect(element, text, i = 0) {
    if (i === 0) {
      element.innerHTML = " ";
    }

    element.innerHTML += text[i];

    if (i === text.length - 1) {
      return;
    }

    setTimeout(() => textTypingEffect(element, text, i + 1), 150);
  }

  textTypingEffect(header, headerTxt);
};
