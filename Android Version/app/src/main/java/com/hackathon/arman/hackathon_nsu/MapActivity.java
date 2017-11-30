package com.hackathon.arman.hackathon_nsu;

import android.app.Dialog;
import android.os.Bundle;
import android.support.design.widget.FloatingActionButton;
import android.support.design.widget.Snackbar;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.Toolbar;
import android.view.View;

import com.google.android.gms.maps.CameraUpdateFactory;
import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.OnMapReadyCallback;
import com.google.android.gms.maps.SupportMapFragment;
import com.google.android.gms.maps.model.BitmapDescriptor;
import com.google.android.gms.maps.model.BitmapDescriptorFactory;
import com.google.android.gms.maps.model.LatLng;
import com.google.android.gms.maps.model.Marker;
import com.google.android.gms.maps.model.MarkerOptions;
import com.hackathon.arman.hackathon_nsu.Fragment.HouseFeed;
import com.hackathon.arman.hackathon_nsu.Model.House;

import java.util.ArrayList;

public class MapActivity extends AppCompatActivity implements OnMapReadyCallback {


    ArrayList<Marker> markers;
    private MarkerOptions markerOptions;

    GoogleMap map;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_map);

        markers = new ArrayList<>();

/**
 * setup map
 */

        // Get the SupportMapFragment and request notification
        // when the map is ready to be used.
        SupportMapFragment mapFragment = (SupportMapFragment) getSupportFragmentManager()
                .findFragmentById(R.id.map);
        mapFragment.getMapAsync(this);
    }

    @Override
    public void onMapReady(GoogleMap googleMap) {
        map = googleMap;


        for (House house : HouseFeed.houseList){

            LatLng houseLatlng =  house.getHouseLatlng();

            markerOptions = new MarkerOptions()
                    .title(house.getHouseTitle()+"\n")
                    .icon(BitmapDescriptorFactory.fromResource(R.mipmap.home_iconn))
                    .snippet(""+house.getHouseOwnerContact())
                    .position(houseLatlng);

            googleMap.addMarker(markerOptions);


        }

/**
 * map camera animation
 */
        googleMap.moveCamera(CameraUpdateFactory.newLatLngZoom(new LatLng(23.815286, 90.426520), 15));





    }
}
