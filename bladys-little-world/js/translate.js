document.addEventListener('DOMContentLoaded', () => {
    // Translation Data
    const translations = {
        en: {
            home: "Home",
            aboutUs: "About Us",
            gallery: "Gallery",
            provideDietaryNeeds: "Provide Your Child's Dietary Needs", // Navbar text
            dietaryNeedsButton: "Dietary Needs", // Button text
            request: "Request Information",
            scheduleTour: "Schedule a Tour",
            welcome: "Blady’s Little World – A Family of Caring Hearts",
            intro: "Run by a mother and daughter, we create a safe, nurturing space where your child is treated like family, with a focus on bilingual learning.",
            requestInfo: "Request Information",
            hours: "Operating Hours:",
            operatingHours: "Mon-Fri: 7:00am - 5:00pm",
            founder1Title: "Ms. Bladymar Porras - Lead Teacher",
            founder1Desc: "Bladymar, the heart behind Blady’s Little World, has dedicated her life to creating a loving and engaging environment for children. Certified as a Child Development Associate (CDA), she blends interactive learning with bilingual education to ensure that each child feels valued and nurtured.",
            founder2Title: "Ms. Paola Pedraza - Assistant Teacher",
            founder2Desc: "Paola’s passion for early education, combined with her warm personality, helps children feel comfortable and confident. With 7 years of experience, she specializes in emotional development and interactive play. Every child in Paola’s care is given the individual attention they need to flourish.",
            previous: "Previous",
            next: "Next",
            childNameLabel: "Child's Name:",
            childNamePlaceholder: "Child's Name",
            ageGroupLabel: "Age Group:",
            ageGroupPlaceholder: "Select Age Group",
            dietaryRestrictionsLabel: "Dietary Restrictions:",
            dietaryRestrictionsPlaceholder: "Please list any dietary restrictions or allergies",
            preferredMealsLabel: "Preferred Meals:",
            preferredMealsPlaceholder: "List any preferred meals or snacks",
            submitDietaryNeeds: "Submit Dietary Needs",
            requestInformation: "Request Information",
            parentNameLabel: "Parent's Name:",
            parentNamePlaceholder: "Parent's Name",
            emailLabel: "Email Address:",
            emailPlaceholder: "Email Address",
            phoneLabel: "Phone Number:",
            phonePlaceholder: "Phone Number",
            additionalInfoLabel: "Additional Information:",
            additionalInfoPlaceholder: "Feel free to add any additional questions or requests",
            submitRequest: "Submit Request",
            scheduleTourButton: "Schedule Tour",
            tourParentNameLabel: "Parent's Name:",
            tourParentNamePlaceholder: "Parent's Name",
            tourEmailLabel: "Email Address:",
            tourEmailPlaceholder: "Email Address",
            preferredTourDateLabel: "Preferred Tour Date:",
            preferredTourDatePlaceholder: "mm/dd/yyyy",
            footerOperatingHoursTitle: "Operating Hours",
            footerOperatingHoursDetail: "Mon-Fri: 7:00am - 5:00pm",
            footerOurProgramsTitle: "Our Programs",
            footerAboutUs: "About Us",
            footerGallery: "Gallery",
            footerDietaryNeeds: "Dietary Needs",
            footerScheduleTour: "Schedule a Tour",
            footerFamilyResourcesTitle: "Family Resources",
            footerRequestInfo: "Request Info",
            footerContactUsTitle: "Contact Us",
            footerPhone: "+1 (774) 623-0803",
            footerEmail: "bladyslittleworld@gmail.com",
            footerAllRights: "All rights reserved.",
            getDirections: "Get Directions",
            ourLocation: "Our Location",
            privacyPolicy: "Privacy Policy",
        },
        es: {
            home: "Inicio",
            aboutUs: "Sobre Nosotros",
            gallery: "Galería",
            provideDietaryNeeds: "Proporcione las Necesidades Dietéticas de su Hijo", // Navbar text
            dietaryNeedsButton: "Necesidades Alimenticias", // Button text
            request: "Solicitar Información",
            scheduleTour: "Programar una Visita",
            welcome: "Blady’s Little World – Una Familia de Corazones Cariñosos",
            intro: "Dirigido por una madre y una hija, creamos un espacio seguro y acogedor donde su hijo es tratado como familia, con un enfoque en el aprendizaje bilingüe.",
            requestInfo: "Solicitar Información",
            hours: "Horario de Atención:",
            operatingHours: "Lun-Vie: 7:00am - 5:00pm",
            founder1Title: "Sra. Bladymar Porras - Maestra Principal",
            founder1Desc: "Bladymar, el corazón detrás de Blady’s Little World, ha dedicado su vida a crear un entorno amoroso y atractivo para los niños. Certificada como Asociada de Desarrollo Infantil (CDA), combina el aprendizaje interactivo con la educación bilingüe para garantizar que cada niño se sienta valorado y cuidado.",
            founder2Title: "Sra. Paola Pedraza - Maestra Asistente",
            founder2Desc: "La pasión de Paola por la educación temprana, combinada con su personalidad cálida, ayuda a los niños a sentirse cómodos y seguros. Con 7 años de experiencia, se especializa en desarrollo emocional y juego interactivo. Cada niño bajo el cuidado de Paola recibe la atención individual que necesita para prosperar.",
            previous: "Anterior",
            next: "Siguiente",
            childNameLabel: "Nombre del Niño:",
            childNamePlaceholder: "Nombre del Niño",
            ageGroupLabel: "Grupo de Edad:",
            ageGroupPlaceholder: "Seleccionar Grupo de Edad",
            dietaryRestrictionsLabel: "Restricciones Dietéticas:",
            dietaryRestrictionsPlaceholder: "Por favor, liste cualquier restricción o alergia",
            preferredMealsLabel: "Comidas Preferidas:",
            preferredMealsPlaceholder: "Liste cualquier comida o refrigerio preferido",
            submitDietaryNeeds: "Enviar Necesidades Dietéticas",
            requestInformation: "Solicitar Información",
            parentNameLabel: "Nombre del Padre:",
            parentNamePlaceholder: "Nombre del Padre",
            emailLabel: "Correo Electrónico:",
            emailPlaceholder: "Correo Electrónico",
            phoneLabel: "Número de Teléfono:",
            phonePlaceholder: "Número de Teléfono",
            additionalInfoLabel: "Información Adicional:",
            additionalInfoPlaceholder: "Siéntase libre de agregar preguntas o solicitudes adicionales",
            submitRequest: "Enviar Solicitud",
            scheduleTourButton: "Programar Visita",
            tourParentNameLabel: "Nombre del Padre:",
            tourParentNamePlaceholder: "Nombre del Padre",
            tourEmailLabel: "Correo Electrónico:",
            tourEmailPlaceholder: "Correo Electrónico",
            preferredTourDateLabel: "Fecha Preferida para la Visita:",
            preferredTourDatePlaceholder: "dd/mm/aaaa",
            footerOperatingHoursTitle: "Horario de Atención",
            footerOperatingHoursDetail: "Lun-Vie: 7:00am - 5:00pm",
            footerOurProgramsTitle: "Nuestros Programas",
            footerAboutUs: "Sobre Nosotros",
            footerGallery: "Galería",
            footerDietaryNeeds: "Necesidades Alimenticias",
            footerScheduleTour: "Programar una Visita",
            footerFamilyResourcesTitle: "Recursos para la Familia",
            footerRequestInfo: "Solicitar Información",
            footerContactUsTitle: "Contáctenos",
            footerPhone: "+1 (774) 623-0803",
            footerEmail: "bladyslittleworld@gmail.com",
            footerAllRights: "Todos los derechos reservados.",
            getDirections: "Obtener Direcciones",
            ourLocation: "Nuestra Ubicación",
            privacyPolicy: "Política de Privacidad",
        }
    };

    // Detect user's default language (en or es)
    function detectDefaultLanguage() {
        const userLang = navigator.language || navigator.userLanguage;
        if (userLang.startsWith('es')) {
            return 'es'; // Default to Spanish if browser language starts with 'es'
        }
        return 'en'; // Default to English otherwise
    }

    // Set the current language from localStorage or based on user's browser language
    let currentLanguage = localStorage.getItem('preferredLanguage') || detectDefaultLanguage();

    // Function to update text content based on selected language
    function updateLanguage(lang) {
        document.querySelectorAll('[data-translate]').forEach(element => {
            const key = element.getAttribute('data-translate');
            if (translations[lang][key]) {
                element.textContent = translations[lang][key];
            }
        });

        document.querySelectorAll('[data-translate-placeholder]').forEach(element => {
            const key = element.getAttribute('data-translate-placeholder');
            if (translations[lang][key]) {
                element.setAttribute('placeholder', translations[lang][key]);
            }
        });

        document.querySelectorAll('select option[data-translate]').forEach(option => {
            const key = option.getAttribute('data-translate');
            if (translations[lang][key]) {
                option.textContent = translations[lang][key];
            }
        });
    }

    // Initialize language on page load
    function initLanguage() {
        updateLanguage(currentLanguage);
        const currentLanguageSpan = document.getElementById('current-language');
        if (currentLanguageSpan) {
            currentLanguageSpan.textContent = currentLanguage.toUpperCase();
        }
    }

    initLanguage();

    // Language Toggle Button
    const languageToggle = document.getElementById('language-toggle');
    if (languageToggle) {
        languageToggle.addEventListener('click', () => {
            currentLanguage = currentLanguage === 'en' ? 'es' : 'en';
            updateLanguage(currentLanguage);
            localStorage.setItem('preferredLanguage', currentLanguage);

            const currentLanguageSpan = document.getElementById('current-language');
            if (currentLanguageSpan) {
                currentLanguageSpan.textContent = currentLanguage.toUpperCase();
            }
        });
    }
});