$(() => {
  $(".trigger-semester").click(e => {
    const self = $(e.target);
    const indexEle = self.index();
    $(".trigger-semester").removeClass("active");
    self.addClass("active");
    $(".semester").removeClass("d-flex");
    $(".semester")
      .get(indexEle)
      .classList.add("d-flex");
  });
});
