$(document).ready(function () {
    toggleFields();
    $("roads").change(function () {
      toggleFields();
    });
  });
  
  function toggleFields() {
    if ($("roads").val() === "stateHighway") {
      $("#stateHighway").show();
    } else {
      $("#stateHighway").hide();
    }
    if ($("roads").val() === "district") {
      $("#district").show();
    } else {
      $("#district").hide();
    }
    if ($("roads").val() === "villageRoad") {
      $("#villageRoad").show();
    } else {
      $("#villageRoad").hide();
    }
  }
  