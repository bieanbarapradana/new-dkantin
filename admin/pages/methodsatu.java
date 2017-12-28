class kotak{
	double panjang,lebar,tinggi;

		void isiData(double p, double l,double t){
			panjang = p;
			lebar = l;
			tinggi = t;
		}

		double hitungVolume(){
			return (panjang*lebar*tinggi);
		}

}

class methodsatu{
	public static void main(String[] args){
		kotak k;

		k=new kotak();

		k.isiData(4,3,2);
		System.out.println("Volume Kotak = "+k.hitungVolume());
	}
}