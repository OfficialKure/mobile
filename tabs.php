<!-- 
  Create tabs with an icon and label, using the tabs-positive style. 
  Each tab's child <ion-nav-view> directive will have its own 
  navigation history that also transitions its views in and out.
-->
<ion-tabs class="tabs-icon-top">


  <!-- Pets Tab -->
  <ion-tab title="Home" icon="icon ion-home" href="#/tab/dash">
    <ion-nav-view name="tab-dash"></ion-nav-view>
  </ion-tab>


  <!-- Adopt Tab -->
  <ion-tab title="Friends" icon="icon ion-person-stalker" href="#/tab/friends">
    <ion-nav-view name="tab-friends"></ion-nav-view>
  </ion-tab>

  <!-- Adopt Tab -->
  <ion-tab title="Activity" icon="icon ion-ios-pulse-strong" href="#/tab/activity">
    <ion-nav-view name="tab-activity"></ion-nav-view>
  </ion-tab>
  
  <!-- About Tab -->
  <ion-tab title="Account" icon="icon ion-gear-b" href="#/tab/account">
    <ion-nav-view name="tab-account"></ion-nav-view>
  </ion-tab>


</ion-tabs>
