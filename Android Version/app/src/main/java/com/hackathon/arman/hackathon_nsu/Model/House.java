package com.hackathon.arman.hackathon_nsu.Model;

import com.google.android.gms.maps.model.LatLng;

import java.util.ArrayList;

/**
 * Created by Arman on 10/8/2017.
 */

public class House {

    private String houseName;
    private String houseAddress;
    private String houseDescription;
    private String houseOwnerContact;
    private ArrayList<String> houseImageLink;
    private double houseRating;
    private int Image;
    private int houseRent;
    private LatLng houseLatlng;
    private String houseTitle;
    private String houseRentPrefer;
    private String houseCategory;

    //constructor blank
    public House() {


    }

    public String getHouseName() {
        return houseName;
    }


    public int getImage() {
        return Image;
    }

    public void setImage(int image) {
        Image = image;
    }

    public void setHouseName(String houseName) {
        this.houseName = houseName;
    }

    public String getHouseAddress() {
        return houseAddress;
    }

    public void setHouseAddress(String houseAddress) {
        this.houseAddress = houseAddress;
    }

    public String getHouseDescription() {
        return houseDescription;
    }

    public void setHouseDescription(String houseDescription) {
        this.houseDescription = houseDescription;
    }

    public String getHouseOwnerContact() {
        return houseOwnerContact;
    }

    public void setHouseOwnerContact(String houseOwnerContact) {
        this.houseOwnerContact = houseOwnerContact;
    }

    public ArrayList<String> getHouseImageLink() {
        return houseImageLink;
    }

    public void setHouseImageLink(ArrayList<String> houseImageLink) {
        this.houseImageLink = houseImageLink;
    }

    public double getHouseRating() {
        return houseRating;
    }

    public void setHouseRating(double houseRating) {
        this.houseRating = houseRating;
    }

    public int getHouseRent() {
        return houseRent;
    }

    public void setHouseRent(int houseRent) {
        this.houseRent = houseRent;
    }

    public LatLng getHouseLatlng() {
        return houseLatlng;
    }

    public void setHouseLatlng(LatLng houseLatlng) {
        this.houseLatlng = houseLatlng;
    }

    public String getHouseTitle() {
        return houseTitle;
    }

    public void setHouseTitle(String houseTitle) {
        this.houseTitle = houseTitle;
    }

    public String getHouseRentPrefer() {
        return houseRentPrefer;
    }

    public void setHouseRentPrefer(String houseRentPrefer) {
        this.houseRentPrefer = houseRentPrefer;
    }

    public String getHouseCategory() {
        return houseCategory;
    }

    public void setHouseCategory(String houseCategory) {
        this.houseCategory = houseCategory;
    }
}
