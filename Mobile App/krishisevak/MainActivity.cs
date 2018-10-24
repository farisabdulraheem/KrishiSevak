using Android.App;
using Android.Widget;
using Android.OS;
using System.Threading;
using krishisevak.Helpers;
using Android.Content;

namespace krishisevak
{
    [Activity(Label = "krishisevak", MainLauncher = true, Icon = "@drawable/icon", Theme = "@style/Theme.Splash")]
    public class MainActivity : Activity
    {


		protected override void OnCreate(Bundle savedInstanceState)
        {   base.OnCreate(savedInstanceState);
             

          SetContentView(Resource.Layout.first);

            Thread.Sleep(2000);
			if (string.IsNullOrEmpty(Settings.Name))
			{
				//Intent intent = new Intent(this, typeof(LoginActivity));
				//	//intent.PutExtra("id", 2);
				//	//StartActivity(intent);
				//	//Settings.Name = string.Empty;
				//}
				//else
				//{
				StartActivity(typeof(LoginActivity));
				//}}
			}
			else {
				
				StartActivity(typeof(PageActivity));


			}
				              
				              
        }

    }

}

