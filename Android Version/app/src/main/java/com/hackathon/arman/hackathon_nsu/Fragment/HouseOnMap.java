package com.hackathon.arman.hackathon_nsu.Fragment;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.google.android.gms.maps.GoogleMap;
import com.google.android.gms.maps.MapView;

import com.hackathon.arman.hackathon_nsu.R;


/**
 * A simple {@link Fragment} subclass.
 */
public class HouseOnMap extends Fragment {


    MapView mapView;
    GoogleMap map;

    public HouseOnMap() {
        // Required empty public constructor

    }


    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment

        View view = inflater.inflate(R.layout.fragment_house_on_map, container, false);

        return view;
    }

}
