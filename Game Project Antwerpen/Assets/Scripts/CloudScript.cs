using System;
using System.Collections;
using System.Collections.Generic;
using System.IO;
using UnityEngine;
using UnityEngine.Experimental.UIElements;

public class CloudScript : MonoBehaviour {

    public GameObject[] cloudArray = new GameObject[4];
    GameObject papaCanvas; 
    int amtoClouds = 0;

	void Start () {
        papaCanvas = GameObject.Find("Canvas");
        Debug.Log(cloudArray.Length);
        CheckClouds();
    }

    private void FillCloudList()
    {
        //cloudArray = Resources.LoadAll<GameObject>("Clouds") as GameObject[];
        //Debug.Log("Cloud array length: " + cloudArray.Length);
    }

    void Update () {
        
	}

    private void CheckClouds()
    {
        
        while(amtoClouds < 4)
        {
            Instantiate(cloudArray[UnityEngine.Random.Range(0, 3)], papaCanvas.transform, false);
            amtoClouds++;
        }
    }
}
