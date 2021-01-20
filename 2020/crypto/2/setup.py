import rsa
import Crypto.Util.number

def text2Int(text):
    """Convert a text string into an integer"""
    return reduce(lambda x, y : (x << 8) + y, map(ord, text))
 
def int2Text(number, size):
    """Convert an integer into a text string"""
    text = "".join([chr((number >> j) & 0xff) for j in reversed(range(0, size << 3, 8))])
    return text.lstrip("\x00")

p=181877351183485707831501350795791940047
q=226416135987861515790815935658588226259
N=p*q
print N
e =  65537
PHI=(p-1)*(q-1)
d=Crypto.Util.number.inverse(e,PHI)

flag=b'Cimpress{fact0rised_9183}'

M=text2Int(flag)
print M
enc=pow(M,e,N)
print enc
dec=pow(enc,d,N)
print dec
print int2Text(dec,1024)
