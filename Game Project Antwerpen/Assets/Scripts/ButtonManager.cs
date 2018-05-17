using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

public class ButtonManager : MonoBehaviour {
    private Button _button;
    public AudioSource click;

    static HandlerScript hs = new HandlerScript();
    int presses;

    Button thisButton;

    private void Start()
    {
        thisButton = GetComponent<Button>();
        
        //Debug.Log("buttonscript btn pos"+thisButton.transform.position);
 
    }

    private void FixedUpdate()
    {
        if (HandlerScript.currentScript == 8)
        {
            if (thisButton.name == "Button_2")
            {
                hs.MoveButton(thisButton);
            }
        }
        else if (HandlerScript.currentScript == 10)
        {
            if (thisButton.name == "Button_3")
            {
                hs.MoveButton(thisButton);
            }
        }
    }

    public void Button_OnClick()
    {
        click.Play();

        //Je vrienden vallen een klasgenoot lastig
        if (HandlerScript.currentScript == 1)
        {
            if (thisButton.name == "Button_2")
            {
                Debug.Log("correct button");

                if (presses < 3)
                {
                    hs.JumpingButton(thisButton);
                    presses++;
                }
                else
                {
                    hs.Score(thisButton);
                    presses = 0;
                    hs.PickScript();
                    HandlerScript.resetSizes = true;

                }
            }
            else
            {
                hs.Score(thisButton);
                hs.PickScript();
                HandlerScript.resetSizes = true;

            }
        }
        //Bij waarheid-durven-of-doen
        else if (HandlerScript.currentScript == 2)
        {
            if (thisButton.name == "Button_1")
            {
                Debug.Log("correct button");

                if (presses < 3)
                {
                    hs.JumpingButton(thisButton);
                    presses++;
                }
                else
                {
                    hs.Score(thisButton);
                    presses = 0;
                    hs.PickScript();
                    HandlerScript.resetSizes = true;

                }
            }
            else
            {
                hs.Score(thisButton);
                hs.PickScript();
                HandlerScript.resetSizes = true;

            }
        }
        //In de kleedkamers
        else if (HandlerScript.currentScript == 4)
        {
            if (thisButton.name == "Button_3")
            {
                Debug.Log("correct button");

                if (presses < 3)
                {
                    hs.JumpingButton(thisButton);
                    presses++;
                }
                else
                {
                    hs.Score(thisButton);
                    presses = 0;
                    hs.PickScript();
                    HandlerScript.resetSizes = true;

                }
            }
            else
            {
                hs.Score(thisButton);
                hs.PickScript();
                HandlerScript.resetSizes = true;

            }
        }
        else if (HandlerScript.currentScript == 8)
        {
            hs.Score(thisButton);
            hs.PickScript();
            HandlerScript.resetSizes = true;


        }
        else if (HandlerScript.currentScript == 10)
        {
            hs.Score(thisButton);
            hs.PickScript();
            HandlerScript.resetSizes = true;

        }
        else
        {
            hs.Score(thisButton);
            hs.PickScript();
        }
        
    }
}
