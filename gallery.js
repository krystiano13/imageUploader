const images = document.querySelector(".images");

if (images) {
  const macy = new Macy({
    container: ".images",
    columns: 3,
    margin: {
      x: 6,
      y: 6,
    },
    breakAt: {
      992: {
        colums: 1,
      },
    },
  });
}
