using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using TMPro;

public class EndHandler : MonoBehaviour {

    public AudioSource bigApl, smallApl;
    public TextMeshProUGUI panelText;

    // Use this for initialization
    void Start () {
        if (PlayerPrefs.GetInt("MyScore") <= 70)
        {
            smallApl.Play();
            panelText.text = "Mogelijk heb jij zelf of in je omgeving nog niet echt te maken gehad met seksuele intimidatie. Dit is helemaal niet erg en hopelijk blijft dit ook zo, we verwijzen je graag naar de site waar je meer info kan vinden die in dit soort situaties bruikbaar kan zijn.";
        }
        else if (PlayerPrefs.GetInt("MyScore") <= 100)
        {
            smallApl.Play();
            panelText.text = "Je hebt een besef van wat seksuele intimidatie kan inhouden, maar het kan in sommige situaties nog moeilijk zijn om de juiste handeling te kiezen. Dit is echter geen probleem, op de site kan je uitgebreide informatie vinden over hoe je best omgaat met seksuele intimidatie.";
        }
        else if (PlayerPrefs.GetInt("MyScore") <= 150)
        {
            bigApl.Play();
            panelText.text = "Je weet wat seksuele intimidatie inhoudt en je kan hier vaak op een gepaste manier mee omgaan. Dit is zeker al een goede start, als je deze start graag nog beter verder zet kan je op de site nog wat extra informatie en tips vinden om je te helpen.";
        }
        else
        {
            bigApl.Play();
            panelText.text = "Jij weet duidelijk hoe je met seksuele intimidatie moet omgaan! Wil je je toch nog wat verder verdiepen in dit onderwerp dan kan dit zeker en vast op de site.";
        }
    }
	
	// Update is called once per frame
	void Update () {
		
	}
}
