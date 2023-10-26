$(function () {
  $sidetabs = $("Sidetab");

  $sidetabs.each(function () {
    $headerBTNs = $(this).find(".tabControls li input[type='radio']");
    $viewerContainer = $(this).find(".viewer");

    $viewerPadding = Number($viewerContainer.css("padding").slice(0, -2));
    $viewerContainer.height(
      $(`Sidetab .viewer>div.active`).height() + $viewerPadding + "px"
    );

    $headerBTNs.change(function () {
      // Hide Courent active viewer
      $activeViewer = $(`Sidetab .viewer>div.active`);
      $activeViewer.removeClass("active");

      // Activate the class
      $newActiveViewer = $($(this).data("tabid"));
      $newActiveViewer.addClass("active");
      setTimeout(() => {
        $viewerContainer.height(
          $newActiveViewer.height() + $viewerPadding + "px"
        );
      }, 1000);
    });
  });
});
