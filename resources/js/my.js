function show(aval) {
    if (aval == "Linear") {
    hiddenLinearDiv.style.display='inline-block';
    hiddenmovieOTTVODDiv.style.display='none';
    hiddenOTTVODtypeDiv.style.display='none';
    hiddenprogrammeOTTVODDiv.style.display='none';
    }
    else if (aval == "OTT VOD") {
    hiddenOTTVODtypeDiv.style.display='inline-block';
    hiddenLinearDiv.style.display='none';
    }
    else{
    hiddenLinearDiv.style.display='none';
    hiddenmovieOTTVODDiv.style.display='none';
    hiddenOTTVODtypeDiv.style.display='none';
    hiddenprogrammeOTTVODDiv.style.display='none';
    }
  }

  function showType(aval) {
      if (aval == "Movie") {
      hiddenmovieOTTVODDiv.style.display='inline-block';
      hiddenprogrammeOTTVODDiv.style.display='none';
      }
      else if (aval == "Programme") {
      hiddenprogrammeOTTVODDiv.style.display='inline-block';
      hiddenmovieOTTVODDiv.style.display='none';
      }
      else{
      hiddenmovieOTTVODDiv.style.display='none';
      hiddenprogrammeOTTVODDiv.style.display='none';
      }
    }

  function myCopyFunction() {
    const copyText = document.getElementById("jsonInput").textContent;
    const textArea = document.createElement('textarea');
    textArea.textContent = copyText;
    document.body.append(textArea);
    textArea.select();
    document.execCommand("copy");
  }

  function myEditFunction() {
    document.getElementById('Json').contentEditable='true';
    donebtn.style.display='inline-block';
    editbtn.style.display='none';
  }

  function myDoneFunction() {
    document.getElementById('Json').contentEditable='false';
    editbtn.style.display='inline-block';
    donebtn.style.display='none';
  }
