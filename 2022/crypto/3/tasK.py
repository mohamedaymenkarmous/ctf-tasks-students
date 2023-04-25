from binascii import hexlify
import base64

#def byte_xor(ba1, ba2):
#    return bytes([_a ^ _b for _a, _b in zip(ba1, ba2)])

def repeating_key_xor(key, string):
    # i is the position within the key
    i = 0
    arr = []
    for ch in string:
    	# Convert the key char and the plaintext char to
        # integers using `ord`, XOR them and add them to
        # the array.
#        print(ch,key[i])
        arr.append(ch ^ key[i])
#        arr.append(ord(ch) ^ ord(key[i]))
#        arr.append(byte_xor(ch,key[i]))
		# Manage the "repeating" part of the repeating key.
        # If the end of the key is reached start back at the
        # beginning.
        i += 1
        if (i == len(key)):
            i = 0

	# Finally convert our array to a byte array (which
    # hexlify likes), then convert to hex and return it.
    return bytearray(arr)
#    return hexlify(bytearray(arr))

string = 'CimpressCimpress{guessable_parts_make_the_key_easy_to_find_107557}'
key = '<looLool>'

encrypted = repeating_key_xor(key.encode("utf-8"), string.encode("utf-8"))
print(base64.b64encode(encrypted))
b_encrypted="fwUCHz4KHB99VQEfHSkcHBdZSQkcHC0NAwlhTA0dGz8wAg1VWTMbBykwBAlHYwkOHDUwGwNhWgUBCxNeX1sLCVsS"
encrypted=base64.b64decode(b_encrypted)
print(encrypted)
print(repeating_key_xor('CimpressCimpress{'.encode("utf-8"),encrypted))
plain = repeating_key_xor(key.encode("utf-8"), encrypted)
print(plain)
