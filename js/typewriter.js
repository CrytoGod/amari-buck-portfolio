// DEVELOPER AND DESIGNER TEXT ANIMATION
export function carrerAnimation() {

    // GSAP ANIMATION
    const skillPath = ["Web Developer", "Motion Designer"];

    // Blinking cursor animation
    gsap.to('.blinkCursor', {
        opacity: 0,
        ease: "power2.inOut",
        repeat: -1
    });

    // Typewriter effect for text animation
    let textEdit = gsap.timeline({ repeat: -1 });
    skillPath.forEach(skill => {
        let tl = gsap.timeline({
            repeat: 1,
            yoyo: true,
            repeatDelay: 2
        });
        tl.to('.text', {
            duration: 1,
            text: skill
        });
        textEdit.add(tl);
    });
}
