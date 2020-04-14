function iniciarMap(){
    var coord = {lat:-17.967561 ,lng: -67.108213};
    var map = new google.maps.Map(document.getElementById('idMap'),{
      zoom: 10,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}