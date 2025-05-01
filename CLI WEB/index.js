const images = document.querySelectorAll('.img-thumbnail');
const modalImage_1 = document.getElementById('modalImage');
const modalTitle_1 = document.getElementById('imageModalLabel');
const prevButton = document.getElementById('prevImage');
const nextButton = document.getElementById('nextImage');

let currentIndex = 0;

function updateModal(index) {
  const image = images[index];
  modalImage_1.src = image.getAttribute('data-bs-image');
  modalTitle_1.textContent = image.getAttribute('data-bs-title');
  currentIndex = index;
}

images.forEach((image, index) => {
  image.addEventListener('click', () => {
    updateModal(index);
  });
});

prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    updateModal(currentIndex - 1);
  }
});

nextButton.addEventListener('click', () => {
  if (currentIndex < images.length - 1) {
    updateModal(currentIndex + 1);
  }
});

// hotel linen 
const specialImages = document.querySelectorAll('.img-thumbnail-2');
const specialModalImage = document.getElementById('specialModalImage');
const specialModalTitle = document.getElementById('specialModalLabel');
const prevSpecialButton = document.getElementById('prevSpecialImage');
const nextSpecialButton = document.getElementById('nextSpecialImage');

let currentSpecialIndex = 0;

function updateSpecialModal(index) {
  const image = specialImages[index];
  specialModalImage.src = image.getAttribute('data-bs-image');
  specialModalTitle.textContent = image.getAttribute('data-bs-title');
  currentSpecialIndex = index;
}

specialImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    updateSpecialModal(index);
  });
});

prevSpecialButton.addEventListener('click', () => {
  if (currentSpecialIndex > 0) {
    updateSpecialModal(currentSpecialIndex - 1);
  }
});

nextSpecialButton.addEventListener('click', () => {
  if (currentSpecialIndex < specialImages.length - 1) {
    updateSpecialModal(currentSpecialIndex + 1);
  }
});


// terry towl
const premiumImages = document.querySelectorAll('.image-3');
const premiumModalImage = document.getElementById('premiumModalImage');
const premiumModalTitle = document.getElementById('premiumModalLabel');
const prevPremiumButton = document.getElementById('prevPremiumImage');
const nextPremiumButton = document.getElementById('nextPremiumImage');

let currentPremiumIndex = 0;

function updatePremiumModal(index) {
  const image = premiumImages[index];
  premiumModalImage.src = image.getAttribute('data-bs-image');
  premiumModalTitle.textContent = image.getAttribute('data-bs-title');
  currentPremiumIndex = index;
}

premiumImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    updatePremiumModal(index);
  });
});

prevPremiumButton.addEventListener('click', () => {
  if (currentPremiumIndex > 0) {
    updatePremiumModal(currentPremiumIndex - 1);
  }
});

nextPremiumButton.addEventListener('click', () => {
  if (currentPremiumIndex < premiumImages.length - 1) {
    updatePremiumModal(currentPremiumIndex + 1);
  }
});


//-------------------curtain
const curtainImages = document.querySelectorAll('.image-4 ');
const curtainModalImage = document.getElementById('curtainModalImage');
const curtainModalTitle = document.getElementById('curtainModalLabel');
const prevCurtainButton = document.getElementById('prevCurtainImage');
const nextCurtainButton = document.getElementById('nextCurtainImage');

let currentCurtainIndex = 0;

function updateCurtainModal(index) {
  const image = curtainImages[index];
  curtainModalImage.src = image.getAttribute('data-bs-image');
  curtainModalTitle.textContent = image.getAttribute('data-bs-title');
  currentCurtainIndex = index;
}

curtainImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    updateCurtainModal(index);
  });
});

prevCurtainButton.addEventListener('click', () => {
  if (currentCurtainIndex > 0) {
    updateCurtainModal(currentCurtainIndex - 1);
  }
});

nextCurtainButton.addEventListener('click', () => {
  if (currentCurtainIndex < curtainImages.length - 1) {
    updateCurtainModal(currentCurtainIndex + 1);
  }
});

//--------------------------- fabrics
const fabricImages = document.querySelectorAll('.img-5');
const fabricModalImage = document.getElementById('fabricModalImage');
const fabricModalTitle = document.getElementById('fabricModalLabel');
const prevFabricButton = document.getElementById('prevFabricImage');
const nextFabricButton = document.getElementById('nextFabricImage');

let currentFabricIndex = 0;

function updateFabricModal(index) {
  const image = fabricImages[index];
  fabricModalImage.src = image.getAttribute('data-bs-image');
  fabricModalTitle.textContent = image.getAttribute('data-bs-title');
  currentFabricIndex = index;
}

fabricImages.forEach((image, index) => {
  image.addEventListener('click', () => {
    updateFabricModal(index);
  });
});

prevFabricButton.addEventListener('click', () => {
  if (currentFabricIndex > 0) {
    updateFabricModal(currentFabricIndex - 1);
  }
});

nextFabricButton.addEventListener('click', () => {
  if (currentFabricIndex < fabricImages.length - 1) {
    updateFabricModal(currentFabricIndex + 1);
  }
});

// ------------------------ sofa covers--
const sofaImages = document.querySelectorAll('.img-6');
  const sofaModalImage = document.getElementById('sofaModalImage');
  const sofaModalTitle = document.getElementById('sofaModalLabel');
  const prevSofaButton = document.getElementById('prevSofaImage');
  const nextSofaButton = document.getElementById('nextSofaImage');

  let currentSofaIndex = 0;

  function updateSofaModal(index) {
    const image = sofaImages[index];
    sofaModalImage.src = image.getAttribute('data-bs-image');
    sofaModalTitle.textContent = image.getAttribute('data-bs-title');
    currentSofaIndex = index;
  }

  sofaImages.forEach((image, index) => {
    image.addEventListener('click', () => {
      updateSofaModal(index);
    });
  });

  prevSofaButton.addEventListener('click', () => {
    if (currentSofaIndex > 0) {
      updateSofaModal(currentSofaIndex - 1);
    }
  });

  nextSofaButton.addEventListener('click', () => {
    if (currentSofaIndex < sofaImages.length - 1) {
      updateSofaModal(currentSofaIndex + 1);
    }
  });

  // ---------------------------cotton bags 
  const cottonBagImagesUnique = document.querySelectorAll('.img-7');
  const cottonBagModalImageUnique = document.getElementById('cottonBagModalImageUnique');
  const cottonBagModalTitleUnique = document.getElementById('cottonBagModalLabelUnique');
  const prevCottonBagButtonUnique = document.getElementById('prevCottonBagImageUnique');
  const nextCottonBagButtonUnique = document.getElementById('nextCottonBagImageUnique');

  let currentCottonBagIndexUnique = 0;

  function updateCottonBagModalUnique(index) {
    const image = cottonBagImagesUnique[index];
    cottonBagModalImageUnique.src = image.getAttribute('data-bs-image');
    cottonBagModalTitleUnique.textContent = image.getAttribute('data-bs-title');
    currentCottonBagIndexUnique = index;
  }

  cottonBagImagesUnique.forEach((image, index) => {
    image.addEventListener('click', () => {
      updateCottonBagModalUnique(index);
    });
  });

  prevCottonBagButtonUnique.addEventListener('click', () => {
    if (currentCottonBagIndexUnique > 0) {
      updateCottonBagModalUnique(currentCottonBagIndexUnique - 1);
    }
  });

  nextCottonBagButtonUnique.addEventListener('click', () => {
    if (currentCottonBagIndexUnique < cottonBagImagesUnique.length - 1) {
      updateCottonBagModalUnique(currentCottonBagIndexUnique + 1);
    }
  });