document.addEventListener("DOMContentLoaded", () => 
{
  const faqs = document.querySelectorAll(".faq-item");

  faqs.forEach(faq => 
  {
    const button = faq.querySelector(".faq-question");

    button.addEventListener("click", e => 
    {
      e.preventDefault();

      if (faq.classList.contains("active")) 
      {
        faq.classList.remove("active");
        return;
      }

      faqs.forEach(item => item.classList.remove("active"));

      faq.classList.add("active");
    });
  });
});
