package com.hackathon.arman.hackathon_nsu.Fragment;


import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.google.android.gms.maps.model.LatLng;
import com.google.firebase.database.DatabaseReference;
import com.google.firebase.database.FirebaseDatabase;
import com.hackathon.arman.hackathon_nsu.Adapter.RecyclerViewCustomAdapter;
import com.hackathon.arman.hackathon_nsu.Model.House;
import com.hackathon.arman.hackathon_nsu.R;

import java.util.ArrayList;

/**
 * A simple {@link Fragment} subclass.
 */
public class HouseFeed extends Fragment {
    FirebaseDatabase database = FirebaseDatabase.getInstance();
    DatabaseReference myRef = database.getReference("Owner").child("HouseList");
   public static ArrayList<House> houseList;


    public HouseFeed() {
        // Required empty public constructor
    }

    /**
     * fagment oncrete view init
     * @param inflater
     * @param container
     * @param savedInstanceState
     * @return
     */
    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
         View view = inflater.inflate(R.layout.fragment_house_feed, container, false);

        myRef.setValue("Hello, World!");
        initRecyclerView(view);
        return view;
    }

    /**
     * dummy data add to the map
     */
    private void addHouse() {

        houseList = new ArrayList<>();
        House house0 = new House();

        house0.setHouseTitle("Luxurious flat for rent in Gulshan ");
        house0.setHouseRent(80000);
        house0.setHouseAddress("Aftabuddin Ahmed Rd\n" +" Bashundhara R/A"+"\n"+
                "Dhaka" );
        house0.setImage(R.drawable.room);
        house0.setHouseOwnerContact("+8801775676776");
        house0.setHouseRating(4.0);
        house0.setHouseLatlng(new LatLng(23.816358, 90.426916));
        houseList.add(house0);


        House house1 = new House();
        house1.setHouseTitle(" Multiple Four Rooms Flat are Available  ");
        house1.setHouseRent(45500);
        house1.setHouseAddress("Block C Rd 11 \n" +" Bashundhara R/A"+"\n"+
                "Dhaka" );
        house1.setImage(R.drawable.room1);
        house1.setHouseOwnerContact("+8801775784695");
        house1.setHouseRating(4.5);
        house1.setHouseLatlng(new LatLng(23.818377, 90.428973));
        houseList.add(house1);


        House house2 = new House();
        house2.setHouseTitle("5 Beds duplex available for Rent");
        house2.setHouseRent(90000);
        house2.setImage(R.drawable.room2);
        house2.setHouseAddress("Road No. 3\n" +
                "Dhaka 1212\n" +" Baridhara DHOS "+"\n");
        house2.setHouseOwnerContact("+8801775676776");
        house2.setHouseRating(4.0);
        house2.setHouseLatlng(new LatLng(23.801532, 90.420228));
        houseList.add(house2);



        House house3 = new House();
        house3.setHouseTitle("Flat for rent in 10th floor");
        house3.setHouseRent(90000);
        house3.setImage(R.drawable.room3);
        house3.setHouseAddress("গুলশান ২ ঢাকা 1212 "+" Baridhara DHOS "+"\n");
        house3.setHouseOwnerContact("+8801718659456");
        house3.setHouseRating(2.5);
        house3.setHouseLatlng(new LatLng(23.798937, 90.410454));
        houseList.add(house3);

        House house4 = new House();
        house4.setHouseTitle("Flat Available for Girls");
        house4.setHouseRent(30000);
        house4.setImage(R.drawable.room4);
        house4.setHouseAddress("Road No. 7\n" +
                "Dhanmondi জিগাতলা \n" +
                "ঢাকা Dhaka 1212\n" +" Baridhara DHOS "+"\n");
        house4.setHouseOwnerContact("+8801911547564");
        house4.setHouseRating(4.6);
        house4.setHouseLatlng(new LatLng(23.742031, 90.372098));
        houseList.add(house4);


        House house5 = new House();
        house5.setHouseTitle("Single Room for rent - Shared Flat");
        house5.setHouseRent(10000);
        house5.setHouseAddress(" Bahsundhora R/A  Block D Road 5 house 197" +"\n");
        house5.setHouseOwnerContact("+8801775676776");
        house5.setHouseRating(4.1);
        house5.setImage(R.drawable.room5);
        house5.setHouseLatlng(new LatLng(23.801716, 90.419544));
        houseList.add(house5);


        House house6 = new House();
        house6.setHouseTitle("5 Beds available for Rent");
        house6.setHouseRent(35000);
        house6.setImage(R.drawable.room1);
        house6.setHouseAddress("Road No. 3\n" +
                "Dhaka 1229\n" +" Baridhara DHOS "+"\n");
        house6.setHouseOwnerContact("+8801775676776");
        house6.setHouseRating(4.0);
        house6.setHouseLatlng(new LatLng(23.801532, 90.420228));
        houseList.add(house6);

        myRef.setValue(houseList);
    }


    /**
     * recycler view Setup
     * @param view
     */
    private void initRecyclerView(View view) {



        addHouse();

        RecyclerView rv = (RecyclerView) view.findViewById(R.id.toletList);
        LinearLayoutManager layout = new LinearLayoutManager(getActivity());

        RecyclerViewCustomAdapter adapter = new RecyclerViewCustomAdapter(getActivity(), houseList);
        rv.setAdapter(adapter);
        rv.setLayoutManager(layout);

    }

}
